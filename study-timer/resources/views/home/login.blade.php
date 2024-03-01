<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form Example</title>
</head>
<body>

<div style="width: 1280px; height: 832px; position: relative; background: #DFDEEF">
    <div style="width: 1280px; height: 832px; left: 0px; top: 0px; position: absolute; background: white"></div>
    <div style="width: 321px; height: 488px; left: 866px; top: 199px; position: absolute">

        <form action="/authenticate" method="post"> <!-- Form added -->
            <div style="width: 305px; height: 50px; left: 1px; top: 113px; position: absolute">
                <!-- Email input -->
                <input type="email" id="emailInput" name="email" style="width: 100%; height: 100%; border: 1px #AFAAAA solid; border-radius: 10px; padding: 0 10px; font-size: 14px; font-family: Inter;" placeholder="Enter Your email">
            </div>
            <div style="width: 305px; height: 50px; left: 1px; top: 201px; position: absolute">
                <!-- Password input -->
                <input type="password" id="passwordInput" name="password" style="width: 100%; height: 100%; border: 1px #AFAAAA solid; border-radius: 10px; padding: 0 10px; font-size: 14px; font-family: Inter;" placeholder="Enter Your Password">
            </div>
            <!-- Log in button -->
            <button type="submit" style="width: 305px; height: 50px; left: 1px; top: 310px; position: absolute; background: #407FA5; border-radius: 50px; border: 1px #AFAAAA solid; cursor: pointer;">
                <div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; color: white; font-size: 20px; font-family: Inter; font-weight: 400;">Log In</div>
            </button>
            <!-- Log in with Google button -->
            <div style="width: 305px; height: 50px; left: 1px; top: 376px; position: absolute; background: white; border-radius: 50px; border: 1px #AFAAAA solid; cursor: pointer;">
                <div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; color: #939393; font-size: 15px; font-family: Inter; font-weight: 600;">Log in with Google</div>
            </div>
            <!-- Forget Password link -->
            <div style="width: 150px; height: 20px; left: 212px; top: 260px; position: absolute;">
                <a href="#" style="color: #4D86AC; font-size: 14px; font-family: Inter; font-weight: 600; text-decoration: none;">Forget Password?</a>
            </div>
            <!-- Don't have an account? Sign Up link -->
            <div style="width: 200px; height: 20px; left: 59px; top: 479px; position: absolute;">
                <span style="color: #939393; font-size: 14px; font-family: Inter; font-weight: 600;">Don't have an account? </span><a href="/signup" style="color: #4D86AC; font-size: 14px; font-family: Inter; font-weight: 600; text-decoration: none;">Sign Up</a>
            </div>
            <!-- Other text elements -->
            <div style="width: 29px; height: 13px; left: 1px; top: 91px; position: absolute; color: black; font-size: 11px; font-family: Inter; font-weight: 400; word-wrap: break-word">Email</div>
            <div style="width: 58px; height: 13px; left: 1px; top: 179px; position: absolute; color: black; font-size: 11px; font-family: Inter; font-weight: 400; word-wrap: break-word">Password</div>
            <div style="width: 144px; height: 13px; left: 0px; top: 44px; position: absolute; color: #939393; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">Login to your account</div>
            <div style="width: 76px; height: 24px; left: 1px; top: 0px; position: absolute; color: black; font-size: 24px; font-family: Inter; font-weight: 700; word-wrap: break-word">Login</div>
        </form> <!-- Form closing tag -->
    </div>
</div>

</body>
</html>
