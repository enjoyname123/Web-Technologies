# Cookies and Sessions – Complete Notes (Exam Oriented)

## 1. Cookies

### Definition

A **cookie** is a small piece of data stored on the **client-side (browser)** by the **web server**. Cookies are mainly used to store user-related information such as login status, username, preferences, etc.

### Characteristics

* Stored on the **client machine (browser)**
* Maximum size: **~4 KB** per cookie
* Can be **deleted by the user**
* **Less secure** compared to sessions
* Automatically sent to the server with every HTTP request

### Creating a Cookie (PHP)

```php
setcookie(name, value, expiry_time);
```

#### Example

```php
setcookie("user", "123", time() + 3600); // valid for 1 hour
```

### Accessing a Cookie

```php
echo $_COOKIE["user"];
```

### Deleting a Cookie

```php
setcookie("user", "", time() - 3600);
```

### Uses of Cookies

* Store login information
* Remember user preferences
* Keep users logged in even after closing the browser

### Disadvantages

* Can be manipulated by users
* Limited storage size
* Not suitable for sensitive data

---

## 2. Sessions

### Definition

A **session** stores user data on the **server-side** and identifies users using a **session ID**. The session ID is usually stored in a cookie on the client browser.

### Characteristics

* Stored on the **server**
* **More secure** than cookies
* No practical size limitation
* Automatically destroyed after **timeout** or browser close

### Starting a Session

```php
session_start();
```

### Creating Session Variables

```php
$_SESSION["username"] = "abc";
```

### Accessing Session Variables

```php
echo $_SESSION["username"];
```

### Destroying a Session

```php
session_destroy();
```

### Advantages of Sessions

* Data is not exposed to the client
* Suitable for sensitive information
* Automatically managed by the server

---

## 3. Cookies vs Sessions (Comparison)

| Cookies                    | Sessions                |
| -------------------------- | ----------------------- |
| Stored on client           | Stored on server        |
| Less secure                | More secure             |
| Size limited (~4KB)        | No size limit           |
| Can be deleted manually    | Auto deleted on timeout |
| Used for long-term storage | Used for temporary data |

---

## 4. Login Concept Using Cookies and Sessions

* Cookies are often used to **remember login details**
* Sessions are used to **validate logged-in users**
* Login confirmation is usually taken using a **confirm dialog box**
* Session ID helps the server identify the user

---

## 5. Important Exam Points

* Cookies → Client-side storage
* Sessions → Server-side storage
* Cookies are less secure
* Sessions use session IDs
* Cookies persist even after browser close (until expiry)
* Sessions expire automatically after timeout.
