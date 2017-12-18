<template>
    <div class="container">
        <div class="row">
            <div class="card" style="min-width: 100%">
                <!--Card content-->
                <div class="card-header">
                    <h3>My Skills</h3>
                </div>
                <div class="card-body">
                    <div class="form-row align-items-center">
                        <div class="form-group col col-sm-8 col-md-6">
                            <label for="skillName">Skill Name</label>
                            <input v-model="skillName" type="text" id="skillName" name="skillName" class="form-control" placeholder="e.g 'Python'">
                        </div>
                        <div class="form-group col col-sm-2 col-md-4">
                            <label for="proficiency">Proficiency (from 0 to 100)</label>
                            <input v-model.number="proficiency" type="number" id="proficiency" name="proficiency" class="form-control" placeholder="e.g 80">
                        </div>
                        <div class="col col-sm-2 col-md-2">
                            <button @click="addSkill" class="btn btn-primary">Add</button>
                        </div>
                    </div>

                    <hr>
                    <div class="text-center">
                        <sync-loader :color="'#2881B3'" :loading="loadingSkills"></sync-loader>
                    </div>
                    <div v-if="this.skillList.length">
                        <div class="row">
                            <div class="col col-sm-6 col-md-4" v-for="skill in this.skillList">
                                <h4 class="text-center">{{ skill.name }} </h4>
                                <h5 class="text-center">{{ skill.proficiency }}%</h5>
                                <div class="row justify-content-center">
                                    <div class="btn-group text-center" role="group" aria-label="Basic example">
                                        <button @click="updateSkill(skill)" type="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                        <button @click="removeSkill(skill)" type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div><!-- /container -->
</template>

<script>
    import SyncLoader from 'vue-spinner/src/SyncLoader.vue';

    export default {
        components: {'sync-loader': SyncLoader},

        data() {
            return {
                skillName: '',
                proficiency: '',

                skillList: [],
                loadingSkills: false,
            }
        },

        mounted() {
            this.getSkills();
        },

        methods: {
            updateSkill(skill) {
                swal({
                    title: skill.name + ' - Update Proficiency',
                    text: 'Update your proficiency with ' + skill.name + ' (from 0 to 100):',
                    icon: 'info',
                    content: {
                        element: "input",
                        attributes: {
                            placeholder: "e.g 85",
                            type: "number",
                        },
                    },
                    button: {
                        text: "Update",
                        closeModal: false,
                    },
                }).then((value) => {
                    if (!value) throw null;

                    if (value < 0 || value > 100) throw new Error('Invalid range - proficiency must be between 0 and 100');
                    return value;

                }).then((value) => {
                    skill.proficiency = value;
                    this.loadingSkills = true;
                    return axios.post('/skills/update/' + skill.name, {
                        proficiency: value,
                    });
                }).then((response) => {
                    console.log(response);
                    return swal('Success', "Skill updated!", 'success');
                }).catch((error) => {
                    swal('Error', error.message, 'error');
                }).then(() => {
                    this.loadingSkills = false;
                });
            },

            removeSkill(skill) {
                this.loadingSkills = true;
                axios.delete('/skills/remove/' + skill.name, {
                    name: skill.name,
                }).then((response) => {
                    console.log(response);
                    this.skillList = this.skillList.filter((skillItem) => {
                        return (skillItem !== skill);
                    });
                }).catch((error) => {
                    console.log(error.response);
                }).then(() => {
                    this.loadingSkills = false;
                });
            },

            getSkillGradient(skill) {
                if (skill.proficiency < 10) {
                    return {gradient: ['red']};
                }
                if (skill.proficiency < 30) {
                    return {gradient: ['green']};
                }
                if (skill.proficiency < 70) {
                    return {gradient: ['blue']};
                }
                if (skill.proficiency < 90) {
                    return {gradient: ['teal']};
                }

                return {gradient: ['gold']};
            },

            getSkills() {
                this.loadingSkills = true;

                axios.get('/skills').then((response) => {
                    const rawSkills = response.data;
                    this.skillList = rawSkills.map((rawSkill) => {
                        return {
                            name: rawSkill.name,
                            proficiency: rawSkill.pivot.proficiency,
                        }
                    });
                }).catch((error) => {
                    console.log(error.response);
                }).then(() => {
                    this.loadingSkills = false;
                });
            },

            addSkill() {
                if (this.skillName && this.proficiency) {
                    const newSkill = {
                        name: this.skillName,
                        proficiency: this.proficiency,
                    };

                    if (this.skillList.filter(skill => skill.name === newSkill.name).length) {
                        swal('Error', 'You already have a skill with that name. Update or delete it first.', 'error');
                        return;
                    }

                    this.loadingSkills = true;
                    axios.post('/skills', {
                        name: this.skillName,
                        proficiency: this.proficiency,
                    })
                        .then(() => {
                            this.skillList.push(newSkill);

                            this.skillName = '';
                            this.proficiency = '';
                        })
                        .then((response) => {
                            console.log(response);
                        })
                        .catch((error) => {
                            console.log(error.response.data);
                        }).then(() => {
                        this.loadingSkills = false;
                    });
                }
            },
        }
    }
</script>