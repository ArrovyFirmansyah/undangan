/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["wedding.html", "index.html"],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      fontFamily: {
        nikah: ["Dancing Script"],
      },
      colors: {
        primary: "#14b8a6",
        secondary: "#64748b",
        dark: "#0f172a",
      },
      screen: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [],
};
