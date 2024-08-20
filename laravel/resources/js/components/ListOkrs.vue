<template>
    <div>
      <h1>{{ message }}</h1>
      <ul v-if="okrs.length">
        <li v-for="(okr, i) in okrs" :key="i">
          <!-- {{ okr.name }} {{ okr.title }} -->
        </li>
      </ul>
      <p v-else>OKRs Não Encontrados.</p>
    </div>
  </template>

  <script>
  import axios from "axios";

  export default {
    data() {
      return {
        okrs: [],
        message: "OKRs",
      };
    },

    mounted() {
      this.fetchOKRs();
    },

    methods: {
      async fetchOKRs() {
        try {
          const response = await this.$http.get("/api/get-okr");
          this.okrs = response.data;
          console.log(this.okrs);
        } catch (error) {
          console.error("Erro ao buscar OKRs:", error);
        }
      },
    },
  };
  </script>

  <style scoped>
  h1 {
    color: #42b983;
    text-align: center;
  }

  ul {
    list-style-type: none;
    padding: 0;
  }

  li {
    padding: 5px 0;
    border-bottom: 1px solid #ddd;
  }

  p {
    text-align: center;
    color: #999;
  }
  </style>
