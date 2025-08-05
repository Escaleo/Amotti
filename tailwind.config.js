export default {
   content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
   ],
   theme: {
      extend: {
         colors: {
            primary: '#F97316',
            secondary: '#1E293B',
            // Agrega más colores personalizados aquí
         },
         fontFamily: {
            sans: ['Inter', 'sans-serif'],
            // Agrega más fuentes aquí
         },
      },
   },
   plugins: [],
}
