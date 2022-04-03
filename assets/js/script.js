tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: "#E5E3C9",
        secondary: "#398AB9",
        tertiary: "#124e70",
      },
    },
    // fontFamily: {
    //   sans: ["Graphik", "sans-serif"],
    //   serif: ["Merriweather", "serif"],
    // },
    // extend: {
    //   spacing: {
    //     128: "32rem",
    //     144: "36rem",
    //   },
    //   borderRadius: {
    //     "4xl": "2rem",
    //   },
    // },
  },
};

// Scroll to the latest chat message in chat window
let chatWindow = document.querySelector(".chat-window");
chatWindow.scrollTop = chatWindow.scrollHeight;

// Send message function goes here
let sendBtn = document.querySelector("#send");
sendBtn.addEventListener("click", e => e.preventDefault());

// Menu function
let dots = document.querySelector(".dots"),
  dotsMenu = document.querySelector(".dots-menu");

dots.addEventListener("click", () => dotsMenu.classList.toggle("hidden"));
