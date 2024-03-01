<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form Example</title>
</head>
<body>

<div style="width: 1280px; height: 832px; position: relative; background: #DFDEEF">
    <div style="width: 1280px; height: 832px; left: 0px; top: 0px; position: absolute; background: white"></div>
    <div style="width: 321px; height: 488px; left: 866px; top: 199px; position: absolute">
        <form action="{{route('home.register')}}" method="post">
        @csrf
        @method('post')
        @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
         <!-- Form added -->
            <div style="width: 305px; height: 50px; left: 1px; top: 112px; position: absolute">
                <!-- Name input -->
                <input type="text" id="nameInput" name="name" style="width: 100%; height: 100%; border: 1px #AFAAAA solid; border-radius: 10px; padding: 0 10px; font-size: 14px; font-family: Inter;" placeholder="Enter Your Name">
            </div>
            <div style="width: 305px; height: 50px; left: 1px; top: 200px; position: absolute">
                <!-- Email input -->
                <input type="email" id="emailInput" name="email" style="width: 100%; height: 100%; border: 1px #AFAAAA solid; border-radius: 10px; padding: 0 10px; font-size: 14px; font-family: Inter;" placeholder="Enter Your email">
            </div>
            <div style="width: 305px; height: 50px; left: 1px; top: 290px; position: absolute">
                <!-- Password input -->
                <input type="password" id="passwordInput" name="password" style="width: 100%; height: 100%; border: 1px #AFAAAA solid; border-radius: 10px; padding: 0 10px; font-size: 14px; font-family: Inter;" placeholder="Enter Your Password">
            </div>
            <!-- Register button -->
            <button type="submit" style="width: 305px; height: 50px; left: 1px; top: 400px; position: absolute; background: #407FA5; border-radius: 50px; border: 1px #AFAAAA solid; cursor: pointer;">
                <div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; color: white; font-size: 20px; font-family: Inter; font-weight: 400;">Register</div>
            </button>
            <!-- Forget Password link -->
            <div style="width: 150px; height: 20px; left: 212px; top: 350px; position: absolute;">
                <a href="#" style="color: #4D86AC; font-size: 14px; font-family: Inter; font-weight: 600; text-decoration: none;">Forget Password?</a>
            </div>
            <!-- Already have an account? Login link -->
            <div style="width: 200px; height: 20px; left: 59px; top: 479px; position: absolute;">
                <span style="color: #939393; font-size: 14px; font-family: Inter; font-weight: 600;">Already have an account? </span><a href="/login" style="color: #4D86AC; font-size: 14px; font-family: Inter; font-weight: 600; text-decoration: none;">Login</a>
            </div>
            <!-- Other text elements -->
            <div style="width: 29px; height: 13px; left: 1px; top: 180px; position: absolute; color: black; font-size: 11px; font-family: Inter; font-weight: 400; word-wrap: break-word">Email</div>
            <div style="width: 29px; height: 13px; left: 1px; top: 91px; position: absolute; color: black; font-size: 11px; font-family: Inter; font-weight: 400; word-wrap: break-word">Name</div>
            <div style="width: 58px; height: 13px; left: 1px; top: 270px; position: absolute; color: black; font-size: 11px; font-family: Inter; font-weight: 400; word-wrap: break-word">Password</div>
            <div style="width: 164px; height: 13px; left: 0px; top: 44px; position: absolute; color: #939393; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">Create your account</div>
            <div style="width: 91px; height: 24px; left: 1px; top: 0px; position: absolute; color: black; font-size: 24px; font-family: Inter; font-weight: 700; word-wrap: break-word">Register</div>
        </form> <!-- Form closing tag -->
    </div>
</div>

</body>
</html>
