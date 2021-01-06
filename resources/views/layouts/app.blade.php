<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual Auth Example</title>
</head>
<body>
    <div>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li>
                <form method="POST" action="#">
                    @csrf

                    <a href="#" onclick="event.preventDefault();
                        this.closest('form').submit();"
                    >
                        Logout
                    </a>
                </form>
            </li>
        </ul>
    </div>

    <div>
        {{ $slot }}
    </div>

</body>
</html>
