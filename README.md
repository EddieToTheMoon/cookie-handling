# Cookie Handling Example in PHP

This repository provides a simple example of setting and reading cookies in PHP. It demonstrates how to store and retrieve data using cookies for web applications.

## Features

- Set a cookie with a specific name, value, and expiration time.
- Retrieve and display the value of a stored cookie.
- Handle cases where a cookie is not set.

See example code in cookie.php

## How It Works

1. **Set Cookie:** The setcookie function is used to store a cookie on the user's browser. The cookie will expire after the specified time (in this case, 3600 seconds or 1 hour).
2. **Read Cookie:** The $_COOKIE superglobal array allows you to access the stored cookies. This script checks if the cookie username exists before displaying its value.
3. **Fallback Handling:** If the cookie is not set, a default message is displayed.

## Usage

1. Copy the example code into a PHP file (e.g., cookies.php).
2. Open the file in your browser.
3. Refresh the page to see the stored cookie value being displayed.

## Example Output

1. On the first load:

> Cookie is not set.

2. After setting the cookie and refreshing the page:

> Hello, JohnDoe

## Requirements

- PHP 7.0 or higher.
- A web server (e.g., Apache, Nginx, or PHP's built-in server).

## Limitations

- Cookies are stored on the client side and can be modified by the user. Avoid storing sensitive data.
- Ensure compliance with privacy laws like GDPR when using cookies.

## Contributing

Contributions are welcome! Feel free to fork the repository and submit pull requests with improvements or additional features.
