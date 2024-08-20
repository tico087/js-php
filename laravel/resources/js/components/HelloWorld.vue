<template>
  <div>
    <div class="user-form-container">
      <h1>{{ message }}</h1>
      <h6>A Palavra é 'Anilina' {{ isPalindrome("Anilina") }} um Palintrono</h6>
      <h6>A Palavra é 'Ismael' {{ isPalindrome("Ismael") }} um Palintrono</h6>
      <h3>
        <label>Faça um teste</label>
        <input type="text" v-model="word" />
        <button @click="checkPalindrome">Verificar</button>
        <p v-if="result !== null">
          A palavra "{{ word }}" {{ result }} um palíndromo.
        </p>
      </h3>
    </div>
  </div>
</template>

  <script>
export default {
  data() {
    return {
      message: "Teste de Palintrono",
      word: "",
      result: null,
    };
  },
  mounted() {
    // console.log("here");
  },
  methods: {
    calc(a, b) {
      return a + b;
    },
    isPalindrome(word) {
      if (typeof word !== "string") {
        return false;
      }

      word = word.toLowerCase().trim();
      let length = word.length;
      let newWord = [];

      for (let i = 0; i < length; i++) {
        newWord.unshift(word[i]);
      }

      console.log([newWord.join(""), word]);
      return this.transalteBool(newWord.join("") === word);
    },

    transalteBool(bool) {
      return bool ? "É" : "Não é";
    },
    checkPalindrome() {
      this.result = this.isPalindrome(this.word);
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

h3 {
  color: #42b983;
  text-align: center;
  font-size: 2rem;
  margin-bottom: 20px;
}

h6 {
  text-align: center;
  margin-bottom: 15px;
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
  text-align: center;
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
