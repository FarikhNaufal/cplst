<dialog id="login_modal" class="modal">
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
                By continuing, you agree to Cuplislite's Terms of Service and acknowledge that you've read our Privacy
                Policy
            </p>

            @livewire('login-form')
        </div>
    </div>
</dialog>

@push('scripts')
    <script>
        Livewire.on('user_logged_in', () => {
            login_modal.close();
        });
    </script>
@endpush

@push('scripts')
    <script>
        function updateLoginButtonState() {
            const emailInputLogin = document.getElementById('emailInput-login');
            const passwordInputLogin = document.getElementById('passwordInput-login');
            const loginButton = document.getElementById('loginButton');

            // Cek apakah email dan password terisi
            const isEmailFilled = emailInputLogin.value.trim() !== '';
            const isPasswordFilled = passwordInputLogin.value.trim() !== '';

            // Aktifkan tombol login jika email dan password terisi, nonaktifkan jika salah satu kosong
            loginButton.disabled = !(isEmailFilled && isPasswordFilled);
        }

        // Panggil fungsi updateLoginButtonState saat input email atau password berubah
        document.getElementById('emailInput-login').addEventListener('input', updateLoginButtonState);
        document.getElementById('passwordInput-login').addEventListener('input', updateLoginButtonState);

        updateLoginButtonState();
    </script>
@endpush
