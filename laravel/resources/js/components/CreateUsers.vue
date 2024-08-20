<template>
    <div class="user-form-container">
      <h1>Criar Usuário</h1>
      <form @submit.prevent="createUser">
        <div class="form-group">
          <label for="name">Nome:</label>
          <input type="text" id="name" v-model="user.name" required />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" v-model="user.email" required />
        </div>
        <div class="form-group">
          <label for="doc">Documento:</label>
          <input type="text" id="doc" v-model="user.doc" required />
        </div>
        <div class="form-group">
          <label for="password">Senha:</label>
          <input type="password" id="password" v-model="user.password" required />
        </div>
        <div class="form-group">
          <label for="role">Perfil:</label>
          <select id="role" v-model="user.role" required>
            <option value="admin">Admin</option>
            <option value="colaborador">Colaborador</option>
          </select>
        </div>
        <button type="submit">Criar Usuário</button>
      </form>
      <p v-if="message">{{ message }}</p>
    </div>
  </template>

  <script>


  export default {
    data() {
      return {
        user: {
          name: '',
          email: '',
          doc: '',
          password: '',
          role: 'colaborador',
        },
        message: '',
      };
    },
    methods: {
      async createUser() {
        try {
          const response = await this.$http.post('/users/store', this.user);
          this.message = 'Usuário criado com sucesso!';
          this.clearForm();
        } catch (error) {
          this.message = 'Erro ao criar usuário: ' + error.response.data.message;
        }
      },
      clearForm() {
        this.user = {
          name: '',
          email: '',
          doc: '',
          password: '',
          role: 'colaborador',
        };
      },
    },
  };
  </script>

  <style scoped>
  .user-form-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  h1 {
    color: #42b983;
    text-align: center;
    font-size: 2rem;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    color: #333;
  }

  input,
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  button {
    width: 100%;
    padding: 10px;
    background-color: #42b983;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
  }

  button:hover {
    background-color: #36a06d;
  }

  p {
    text-align: center;
    color: #999;
    font-size: 1rem;
    margin-top: 20px;
  }
  </style>
