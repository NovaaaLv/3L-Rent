import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                Black_Ops_One: ["Black Ops One", "sans-serif"], // Ganti nama font dengan benar
                ubuntu: ["Ubuntu", "sans-serif"], // Pastikan nama font sesuai
            },
            colors: {
                primary: "#EBEBEB",
                secondary: "#64748b",
                nav_color: "#ffffff",
                font_color_primary: '#4f4f4f',
                gray_white: "rgb(241 245 249)",
                sec3: "#E4E4E4",
                heading: "#164e63",
                text_desk: "#414042",
                footer: "#388CCB",
                white: "#ffffff",
                black: "#000000",
                green: "#166534",
            },
            spacing: {
                135: "35rem",
                27: "6.5rem",
                // card size
                365: "365px",
                196: "196px",
                500: "500px",
                800: "800px",
                100: "90px",
                320: "320px",
                600: "600px"
            },
            fontSize: {
                smn: "8px",
            },
        },
    },

    plugins: [forms, typography],
};
