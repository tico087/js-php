<template>
    <div class="user-list-container">
      <h1>{{ message }}</h1>

      <table v-if="users.length">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(user, i) in users" :key="i">
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
          </tr>
        </tbody>
      </table>
      <p v-else>Usuários Não Encontrados.</p>
    </div>
  </template>

  <script>
  export default {
    props: ["users"],

    data() {
      return {
        message: "Lista de Usuários",
      };
    },

    mounted() {
      console.log("here!");
    },
  };
  </script>

  <style scoped>
  .user-list-container {
    max-width: 800px;
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

  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  thead {
    background-color: #42b983;
    color: white;
  }

  th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  tr:hover {
    background-color: #f1f1f1;
  }

  p {
    text-align: center;
    color: #999;
    font-size: 1.2rem;
  }
  </style>
