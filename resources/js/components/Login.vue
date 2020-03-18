<template>
    <div class="container">
        <form method="POST" action="/authorization/login" v-on:submit="login">
            <input type="hidden" name="_token" :value="csrfToken">
            <md-field class="login-input" :class="userErrorClass">
                <label>Usuário</label>
                <md-input v-model="user" name="user"></md-input>
                <span class="md-error">Campo obrigatório!</span>
            </md-field>
            <md-field class="login-input" :class="passErrorClass">
                <label>Senha</label>
                <md-input v-model="pass" name="pass"></md-input>
                <span class="md-error">Campo obrigatório!</span>
            </md-field>
            <md-button type="submit" class="md-raised md-primary">Logar</md-button>
        </form>
    </div>
</template>
<script>

export default {
    props: [ 'csrfToken' ],
    data: () => {
        return {
            user: '',
            pass: '',
            invalidUser: false,
            invalidPass: false,
        }
    },
    computed: {
        userErrorClass () {
            return {
                'md-invalid': this.invalidUser
            }
        },
        passErrorClass () {
            return {
                'md-invalid': this.invalidPass
            }
        }
    },
    methods: {
        login () {
            console.log('dshajdha')
            if (!this.user || this.user.trim() == '')
                this.invalidUser = true
            else this.invalidUser = false

            if (!this.pass || this.pass.trim() == '')
                this.invalidPass = true
            else this.invalidPass = false


        }
    }
}

</script>

<style>

.container {
    display: flex;
    flex: 1;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.login-input {
    width: 30em;
}

</style>