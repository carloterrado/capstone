const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
       
    ],

    theme: {
        screen: {
            sm: '480px',
            md: '768px',
            lg: '976',
            xl: '1440px'
          },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                accent: {
                  regular:'#e84949',
                  dark: 'rgba(248, 57, 57, 0.80)',
                  light: 'rgba(161, 12, 12, 0.777)',
                  verylight: 'rgba(232, 73, 73, 0.10)',
                  green: 'rgb(28, 176, 105)',
                },
                dark: '#060505',
                mid: '#695252',
                white: '#FFFFFF',
            }
        },
        
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
};
