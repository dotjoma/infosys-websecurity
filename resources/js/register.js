// for register.php
function setupPasswordToggle(toggleId, inputId) {
    document.getElementById(toggleId).addEventListener('click', function() {
        const input = document.getElementById(inputId);
        const icon = this.querySelector('i');
        
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
}

setupPasswordToggle('togglePassword', 'password');
setupPasswordToggle('toggleConfirmPassword', 'confirmPassword');

// Password strength checker
document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    const strengthBar = document.getElementById('passwordStrength');
    const requirements = {
        length: password.length >= 8,
        upper: /[A-Z]/.test(password),
        number: /[0-9]/.test(password),
        special: /[^A-Za-z0-9]/.test(password)
    };
    
    // Update requirement indicators
    document.getElementById('reqLength').className = requirements.length ? 'requirement-met' : '';
    document.getElementById('reqUpper').className = requirements.upper ? 'requirement-met' : '';
    document.getElementById('reqNumber').className = requirements.number ? 'requirement-met' : '';
    document.getElementById('reqSpecial').className = requirements.special ? 'requirement-met' : '';
    
    if (requirements.length) {
        document.getElementById('reqLength').innerHTML = '<i class="fas fa-check-circle"></i> Minimum 8 characters';
    } else {
        document.getElementById('reqLength').innerHTML = '<i class="far fa-circle"></i> Minimum 8 characters';
    }
    
    // Calculate strength score (0-4)
    const score = Object.values(requirements).filter(Boolean).length;
    
    // Update strength bar
    const width = (score / 4) * 100;
    strengthBar.style.width = `${width}%`;
    
    // Update color based on strength
    if (score <= 1) {
        strengthBar.style.backgroundColor = '#ef4444'; // red
    } else if (score === 2) {
        strengthBar.style.backgroundColor = '#f59e0b'; // orange
    } else if (score === 3) {
        strengthBar.style.backgroundColor = '#3b82f6'; // blue
    } else {
        strengthBar.style.backgroundColor = '#10b981'; // green
    }
    
    // Update progress bar
    document.getElementById('progressBar').style.width = '66%';
});

// Confirm password validation
document.getElementById('confirmPassword').addEventListener('input', function() {
    const password = document.getElementById('password').value;
    const confirmPassword = this.value;
    const feedback = document.getElementById('passwordMatchFeedback');
    
    if (confirmPassword && password !== confirmPassword) {
        this.classList.add('is-invalid');
        feedback.style.display = 'block';
    } else {
        this.classList.remove('is-invalid');
        feedback.style.display = 'none';
        // Update progress bar
        if (confirmPassword) {
            document.getElementById('progressBar').style.width = '100%';
        } else {
            document.getElementById('progressBar').style.width = '66%';
        }
    }
});

// Form submission handling
// document.getElementById('registerForm').addEventListener('submit', function(e) {
//     e.preventDefault();
    
//     // Validate password match
//     const password = document.getElementById('password').value;
//     const confirmPassword = document.getElementById('confirmPassword').value;
    
//     if (password !== confirmPassword) {
//         document.getElementById('confirmPassword').classList.add('is-invalid');
//         document.getElementById('passwordMatchFeedback').style.display = 'block';
//         return;
//     }
    
//     const btn = this.querySelector('button[type="submit"]');
//     btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Creating account...';
//     btn.disabled = true;
// });