<dialog id="signup_modal" class="modal">
    <div class="modal-box bg-base-300">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-3 top-3">✕</button>
        </form>

        <div class="mt-5 p-2">
            <h2
                class="text-3xl font-bold text-center bg-gradient-to-r from-blue-500 to-primary text-transparent bg-clip-text">
                Cuplislite
            </h2>
            <p class="text-xs text-neutral-400 my-3 text-center">
                By continuing, you agree to Cuplislite's Terms of Service and acknowledge that you've read our
                Privacy
                Policy
            </p>
            @livewire('SignupForm')
        </div>
    </div>

    @include('auth.login')


    @push('scripts')
        <script>
            Livewire.on('user-logged', () => {
                signup_modal.close();
            });

            Livewire.on('show-auth', () => {
                signup_modal.showModal();
            });

        </script>
    @endpush

    @push('scripts')
        <script>
            async function handleModalSwitch() {
                await signup_modal.close();

                setTimeout(function() {
                    login_modal.showModal();
                }, 200);
            }
        </script>
    @endpush

    @push('scripts')
        <script>
            function updateSignupButtonState() {
                const usernameInputSignup = document.getElementById('usernameInput-signup');
                const emailInputSignup = document.getElementById('emailInput-signup');
                const passwordInputSignup = document.getElementById('passwordInput-signup');
                const signupButton = document.getElementById('signupButton');

                const isUsernameFilled = usernameInputSignup.value.trim() !== '';
                const isEmailFilled = emailInputSignup.value.trim() !== '';
                const isPasswordFilled = passwordInputSignup.value.trim() !== '';

                // Aktifkan tombol login jika email dan password terisi, nonaktifkan jika salah satu kosong
                signupButton.disabled = !(isUsernameFilled && isEmailFilled && isPasswordFilled);
            }

            // Panggil fungsi updateSignupButtonState saat input email atau password berubah
            document.getElementById('usernameInput-signup').addEventListener('input', updateSignupButtonState);
            document.getElementById('emailInput-signup').addEventListener('input', updateSignupButtonState);
            document.getElementById('passwordInput-signup').addEventListener('input', updateSignupButtonState);

            updateSignupButtonState();
        </script>
    @endpush
</dialog>
