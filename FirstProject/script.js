const UserInteraction = {
  data() {
    return {
      textTwo: "Cheesecake"
    }
  },
  methods: {
    checkPalindrome() {
      this.textTwo = this.textTwo.split("").reverse().join("")
    }
  }
}

Vue.createApp(UserInteraction).mount("#textToReverse")

const Timer = {
  data() {
    return {
      timer: 0
    }
  },
  mounted() {
    setInterval(() => {
      this.timer++
    }, 1000)
  }
}

Vue.createApp(Timer).mount("#timer")

const UserInput = {
  data() {
    return {
      inputText: "Type here"
    }
  }
}

Vue.createApp(UserInput).mount("#inputForm")
