<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | SimpleBank</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resources/css/register.css">
</head>
<body>
    <div class="container">
        <div class="register-container">
            <div class="register-card">
                <div class="register-header">
                    <h3><i class="fas fa-user-plus me-2"></i>Create Your Account</h3>
                    <div class="register-progress">
                        <div class="register-progress-bar" id="progressBar"></div>
                    </div>
                </div>
                <div class="register-body">
                    <form id="registerForm" action="../controllers/authcontroller.php" method="POST" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="John" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="username" class="form-label">Choose Username</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                            </div>
                            <small class="text-muted">Minimum 6 characters, letters and numbers only</small>
                        </div>
                        
                        <div class="mb-3 position-relative">
                            <label for="password" class="form-label">Create Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Create strong password" required>
                                <span class="password-toggle" id="togglePassword">
                                    <i class="far fa-eye"></i>
                                </span>
                            </div>
                            <div class="password-strength">
                                <div class="password-strength-bar" id="passwordStrength"></div>
                            </div>
                            <ul class="requirements-list mt-2">
                                <li id="reqLength"><i class="far fa-circle"></i> Minimum 8 characters</li>
                                <li id="reqUpper"><i class="far fa-circle"></i> At least 1 uppercase letter</li>
                                <li id="reqNumber"><i class="far fa-circle"></i> At least 1 number</li>
                                <li id="reqSpecial"><i class="far fa-circle"></i> At least 1 special character</li>
                            </ul>
                        </div>
                        
                        <div class="mb-3 position-relative">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your password" required>
                                <span class="password-toggle" id="toggleConfirmPassword">
                                    <i class="far fa-eye"></i>
                                </span>
                            </div>
                            <div class="invalid-feedback" id="passwordMatchFeedback">
                                Passwords do not match
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-register w-100 mb-3">
                            <i class="fas fa-user-plus me-2"></i>Create Account
                        </button>
                    
                        <div class="text-center">
                            <p class="small mb-0">Already have an account? <a href="/login" class="login-link">Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../resources/js/register.js"></script>
</body>
</html>