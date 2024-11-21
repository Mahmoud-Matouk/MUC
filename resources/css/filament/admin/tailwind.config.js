import preset from "../../../../vendor/filament/filament/tailwind.config.preset";

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./resources/views/livewire/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./vendor/jaocero/radio-deck/resources/views/**/*.blade.php"
    ],

    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1170px",
        },

        container: {
            center: true,
            padding: "10px",
        },
    },
};
