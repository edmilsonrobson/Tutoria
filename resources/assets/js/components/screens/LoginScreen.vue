<template>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="card" style="max-width: 40%">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <!--<img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">-->
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Login</h4>
                    <!--Text-->
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </div>

    </div><!-- /container -->
</template>

<script>
    export default {

    }
</script>