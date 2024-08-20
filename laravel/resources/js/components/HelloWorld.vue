<template>
  <div>
    <h1>{{ message }}</h1>
    <!-- <h3>
        <input v-model="number1">
        <input v-model="number2">
    </h3> -->
    <h3>Palavra Anilina : {{ palindrome('Anilina') }}</h3>
    <h3>Palavra Ismael : {{ palindrome('Ismael') }}</h3>
  </div>

</template>

  <script>
export default {
  data() {
    return {
      message: "Hello, World!",
    };
  },
  mounted() {
    // console.log("here");
  },
  methods: {
    calc(a, b) {
      return a + b;
    },

    palindrome(word){

        word = word.toLowerCase();
        let length = word.length;
        let newWord = [];

        for(let i=0; i< length; i++)
        {
            newWord.unshift(word[i]);
        }

        console.log ([newWord.join(''), word]);
        return (newWord.join('') === word) ? true : false;

    }
  },
};
</script>

  <style scoped>
h1 {
  color: #42b983;
  text-align: center;
}
h3 {
  color: #000100;
  text-align: center;
}
</style>
