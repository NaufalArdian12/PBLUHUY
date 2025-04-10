<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
        }

        .left-section {
            flex: 1;
            background-image: url('/api/placeholder/800/1200');
            background-size: cover;
            background-position: center;
            position: relative;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 2rem;
        }

        .back-button {
            position: absolute;
            top: 2rem;
            left: 2rem;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            cursor: pointer;
            font-size: 14px;
        }

        .back-button svg {
            margin-right: 5px;
        }

        .tagline {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        .dots {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .dot {
            width: 40px;
            height: 3px;
            background-color: white;
            border-radius: 50px;
            opacity: 0.5;
        }

        .dot.active {
            opacity: 1;
        }

        .right-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
        }

        .login-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }

        .register-link {
            margin-bottom: 2rem;
            color: #555;
        }

        .register-link a {
            color: #4285F4;
            text-decoration: none;
            font-weight: 500;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            background-color: #f5f5f5;
        }

        .password-input {
            position: relative;
        }

        .password-input .form-control {
            padding-right: 3rem;
        }

        .eye-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
            cursor: pointer;
        }

        .forgot-password {
            display: block;
            text-align: left;
            color: #777;
            text-decoration: none;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        .login-button {
            width: 100%;
            padding: 1rem;
            background-color: #4285F4;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            margin-top: 1rem;
            margin-bottom: 2rem;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #777;
            margin-bottom: 1.5rem;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }

        .divider span {
            padding: 0 10px;
        }

        .google-button {
            width: 100%;
            padding: 0.8rem;
            background-color: white;
            color: #333;
            border: 1px solid #ddd;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .google-icon {
            margin-right: 8px;
        }

        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }

            .left-section {
                flex: none;
                height: 30vh;
            }

            .right-section {
                flex: none;
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="left-section">
        <button class="back-button">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 12H5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 19L5 12L12 5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Back to website
        </button>

        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot active"></div>
        </div>
    </div>

    <div class="right-section">
        <div class="login-container">
            <h1 class="login-title">Login</h1>
            <p class="register-link">Belum punya akun? <a href="#">buat akun</a></p>

            <form>
                <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Username">
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="password-input">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="eye-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <a href="#" class="forgot-password">Lupa password?</a>
                </div>

                <button type="submit" class="login-button">Login</button>
            </form>

            <div class="divider">
                <span>atau login dengan</span>
            </div>

            <a href="{{ route('login.google') }}" class="google-button">
                <svg class="google-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 186.69 190.5">
                    <g transform="translate(1184.583 765.171)">
                        <path d="M-1089.333-687.239v36.888h51.262c-2.251 11.863-9.006 21.908-19.137 28.662l30.913 23.986c18.011-16.625 28.402-41.044 28.402-70.052 0-6.754-.606-13.249-1.732-19.483z" fill="#4285f4"/>
                        <path d="M-1142.714-651.791l-6.972 5.337-24.679 19.223h0c15.673 31.086 47.796 52.561 85.03 52.561 25.717 0 47.278-8.486 63.038-23.033l-30.913-23.986c-8.486 5.715-19.31 9.179-32.125 9.179-24.765 0-45.806-16.712-53.34-39.226z" fill="#34a853"/>
                        <path d="M-1174.365-712.61c-6.494 12.815-10.217 27.276-10.217 42.689s3.723 29.874 10.217 42.689c0 .086 31.693-24.592 31.693-24.592-1.905-5.715-3.031-11.776-3.031-18.098s1.126-12.383 3.031-18.098z" fill="#fbbc05"/>
                        <path d="M-1089.333-727.244c14.028 0 26.497 4.849 36.455 14.201l27.276-27.276c-16.539-15.413-38.013-24.852-63.731-24.852-37.234 0-69.359 21.388-85.032 52.561l31.692 24.592c7.533-22.514 28.575-39.226 53.34-39.226z" fill="#ea4335"/>
                    </g>
                </svg>
                Google
            </a>
        </div>
    </div>
</body>
</html>
