<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Poppins', 'Segoe UI', 'Arial', 'sans-serif'],
                },
                colors: {
                    rw: {
                        green: '#0a3323',
                        teal: '#018577',
                        orange: '#E27602',
                        gold: '#f8c43a',
                        ink: '#16302b',
                        muted: '#5f726b',
                    },
                },
                boxShadow: {
                    soft: '0 18px 45px rgba(10, 51, 35, 0.12)',
                },
            },
        },
    };
</script>
<style type="text/tailwindcss">
    @layer base {
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        body {
            @apply font-sans antialiased;
        }

        a {
            @apply transition;
        }

        label {
            @apply mb-1.5 block text-sm font-medium text-slate-700;
        }
    }
</style>
