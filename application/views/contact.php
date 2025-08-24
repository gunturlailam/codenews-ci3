<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>


<body style="background:#f4f6f8;font-family:Arial,sans-serif;">
    <div style="max-width:400px;margin:40px auto;padding:24px 18px;background:#fff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.07);">
        <h2 style="text-align:center;color:#2d3748;margin-bottom:18px;">Contact Us</h2>
        <p style="text-align:center;color:#718096;margin-bottom:24px;">Hubungi kami melalui form berikut</p>
        <form action="/article/new" method="post">
            <div style="margin-bottom:14px;">
                <label for="name" style="display:block;margin-bottom:6px;">Name</label>
                <input type="text" name="name" placeholder="your name" required style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;" />
            </div>
            <div style="margin-bottom:14px;">
                <label for="email" style="display:block;margin-bottom:6px;">Email</label>
                <input type="email" name="email" placeholder="your email address" required style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;" />
            </div>
            <div style="margin-bottom:18px;">
                <label for="message" style="display:block;margin-bottom:6px;">Message</label>
                <textarea name="message" cols="30" rows="5" placeholder="write your message" required style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;"></textarea>
            </div>
            <div style="text-align:center;">
                <input type="submit" value="Kirim" style="background:#3182ce;color:#fff;padding:8px 18px;border:none;border-radius:4px;cursor:pointer;margin-right:8px;" />
                <input type="reset" value="Reset" style="background:#e2e8f0;color:#2d3748;padding:8px 18px;border:none;border-radius:4px;cursor:pointer;" />
            </div>
        </form>
    </div>
</body>

</html>