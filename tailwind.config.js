/** @type {import('tailwindcss').Config} */
export default {
   content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
   ],
   theme: {
      extend: {
         colors: {
            main: "#dae0e6",
            secondary: "#ffffff",
            accent: "#ff4500"
         }
      },
   },
   plugins: [],
};
