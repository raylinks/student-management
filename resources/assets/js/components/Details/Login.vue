<template>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" @submit.prevent="login">

                            <div class="col-md-6">
                                <label>
                                    Ema<span class="req">*</span>
                                </label>
                                <input type="email" class="form-control" name="email" value="" v-model="loginData.email"  autocomplete="off"
                                       autocorrect="off"/>

                                <span class="help-block">
      <strong class="bg-white">@{{ getError('email') }}</strong>
      </span>



                                <label>
                                    Password<span class="req">*</span>
                                </label>
                                <input type="password" class="form-control" name="password" v-model="loginData.password"  autocomplete="off" autocorrect="off"/>
                                <span class="help-block">
      <strong class="bg-white">@{{ getError('password') }}</strong>
      </span>
                                <br>

                                <label>
                                    <input type="checkbox" name="remember"  > Remember Me
                                </label>

                                <label>
                                    <a class="btn btn-link" href="">Forgot Your Password?</a>
                                </label>

                            </div>

                            <div class="col-md-6 login-do">
                                <button  type="submit" >
                                    login
                                </button>
                                <p>Do not have an account?</p>
                                <a href="" class="hvr-shutter-in-horizontal">Signup</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<style>
    /*
 * Specific styles of signin component
 */
    /*
     * General styles
     */
    body, html {
        height: 100%;
        background-repeat: no-repeat;
        background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
    }

    .card-container.card {
        max-width: 350px;
        padding: 40px 40px;
    }

    .btn {
        font-weight: 700;
        height: 36px;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
    }

    /*
     * Card component
     */
    .card {
        background-color: #F7F7F7;
        /* just in case there no content*/
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-top: 50px;
        /* shadows and rounded borders */
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .profile-img-card {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }

    /*
     * Form styles
     */
    .profile-name-card {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0 0;
        min-height: 1em;
    }

    .reauth-email {
        display: block;
        color: #404040;
        line-height: 2;
        margin-bottom: 10px;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .form-signin #inputEmail,
    .form-signin #inputPassword {
        direction: ltr;
        height: 44px;
        font-size: 16px;
    }

    .form-signin input[type=email],
    .form-signin input[type=password],
    .form-signin input[type=text],
    .form-signin button {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        z-index: 1;
        position: relative;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .form-signin .form-control:focus {
        border-color: rgb(104, 145, 162);
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    }

    .btn.btn-signin {
        /*background-color: #4d90fe; */
        background-color: rgb(104, 145, 162);
        /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
        padding: 0px;
        font-weight: 700;
        font-size: 14px;
        height: 36px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        border: none;
        -o-transition: all 0.218s;
        -moz-transition: all 0.218s;
        -webkit-transition: all 0.218s;
        transition: all 0.218s;
    }

    .btn.btn-signin:hover,
    .btn.btn-signin:active,
    .btn.btn-signin:focus {
        background-color: rgb(12, 97, 33);
    }

    .forgot-password {
        color: rgb(104, 145, 162);
    }

    .forgot-password:hover,
    .forgot-password:active,
    .forgot-password:focus{
        color: rgb(12, 97, 33);
    }
</style>

<script>
    import {url} from '../../Utility/mastery'
    export  default {
        data() {
            return {
                loginData:{
                    email:'',
                    password:''
                },
                errors: {}

            }
        },
        methods: {
            login() {
                axios.post(url/login`, this.loginData)
                    .then(function (response) {

                    })
                    .catch((err) =>{
                        this.errors = err.body
                    });
            },
            getError(field) {
                if (this.errors.hasOwnProperty(field)) {
                    if (typeof this.errors[field] === "object") {
                        return this.errors[field][0];
                    }
                    if (typeof this.errors[field] === "string") {
                        return this.errors[field]
                    }
                }
            }
        }
    }
</script>