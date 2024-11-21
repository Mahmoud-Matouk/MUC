import preset from "./vendor/filament/support/tailwind.config.preset";

const colors = require("tailwindcss/colors");

const dark = {
    50: "#FDF2F2",
      100: "#FAE5E5",
      200: "#F4C7C7",
      300: "#EFAEAE",
      400: "#EA9494",
      500: "#777E90",
      600: "#E05D5D",
      700: "#DB4343",
      800: "#141F1F",
      900: "#6B1515",
      950: "#330A0A"
};

const primary = {
    50: "#FEF1F4",
    100: "#FCE3E9",
    200: "#F9C2CF",
    300: "#F7A6B9",
    400: "#F4869F",
    500: "#F16A89",
    600: "#EE4970",
    700: "#EB2D5A",
    800: "#E01544",
    900: "#700A22",
    950: "#380511"

};

const secondary = {
    50: "#ECF7FE",
    100: "#DEF1FD",
    200: "#BCE3FA",
    300: "#9BD4F8",
    400: "#75C4F6",
    500: "#53B6F3",
    600: "#32A8F1",
    700: "#1099EF",
    800: "#0E83CC",
    900: "#074064",
    950: "#042235"
};

/** @type {import('tailwindcss').Config} */
module.exports = {
    plugins: [
        require('tailwind-clip-path'),
    ],
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./app/Livewire/**/*.php",
        "./resources/**/*.blade.php",
    ],
    safelist: [
        "text-primary-800",
        "bg-[#366BD1]",
        "bg-[#F5D773]",
        "bg-[#032D25]",
        "text-white",
        "text-black",
        "fill-[#072764]",
        "fill-[#C09300]",
        "fill-[#021E19]",
    ],
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1170px",
        },

        extend: {
            fontFamily: {
                'Jakarta': ['"Plus Jakarta Sans"','sans-serif'],
            },
            backgroundImage: {
                'who-back':"url('/public/assets/img/home/who/rec.svg')",
              },
            content:{
                'word':'url("/public/assets/img/home/intro/word_bg.svg")',
            },
            animation: {
                "infinite-scroll": "infinite-scroll 25s linear infinite",
                "fade-in": "fade-in linear forwards",
            },
            keyframes: {
                "infinite-scroll": {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(100%)" },
                },
                "fade-in": {
                    from: {
                      opacity: 0
                    },
                    to: {
                      opacity: 1
                    }
                  },
                
            },
            colors: {
                primary: primary,
                secondary: secondary,
                gray: `#959595`,
                light: `#F5F5F5`,
                dark: dark,
                white: `#fff`,
                orange: "#F5D773",
            },
        },

        container: {
            center: true,
            padding: "10px",
        },
    },
};
