# 💻 Client_Web_dilsecodie – Dynamic Code Repository Website (PHP + JavaScript)

**Client_Web_dilsecodie** is a **handcrafted PHP + JavaScript web application** designed as a **dynamic code repository and tutorial platform**.
It allows users to **view, search, and copy code snippets** directly from the browser — with an elegant UI, syntax highlighting, and one-click clipboard copy functionality.

Built by **CodieByHeaart**, this project blends **clean PHP backend logic** with **interactive JavaScript UI** and **Prism.js syntax highlighting** for an efficient developer learning experience.

---

## 🚀 Key Features

* 🔍 **Search Repository Logic** – find code snippets or tutorials instantly
* 📋 **Copy to Clipboard Box** – one-click “Copy Code” functionality for easy use
* 🧠 **Syntax Highlighting (Prism.js)** – clean and readable code display
* 🧩 **Dynamic PHP Components** – includes modular `header.php`, `footer.php`, and `databaseconnection.php`
* 🎨 **Handmade UI/UX Design** – simple, responsive, and lightweight interface
* 🧾 **Category & Tutorial Pages** – supports Java, PHP, Python, .NET, and AI topics
* 🌐 **SEO Optimized URLs and Sitemap** – ready for Google indexing

---

## 🧱 Tech Stack

| Layer                   | Technology                           |
| ----------------------- | ------------------------------------ |
| **Frontend**            | HTML5, CSS3, JavaScript (Vanilla JS) |
| **Syntax Highlighting** | Prism.js                             |
| **Backend**             | PHP 8+                               |
| **Database**            | MySQL                                |
| **Server Config**       | Apache (.htaccess routing)           |

---

## 📂 Project Structure

```
client_Web_dilsecodie/
 ├── code-box-copy/           # JS logic for copy button
 ├── css/                     # Custom handmade styles
 ├── js/                      # UI scripts & event handlers
 ├── fonts/                   # Web fonts
 ├── images/                  # UI icons and images
 ├── prism/                   # Prism.js syntax library
 ├── header.php / footer.php  # Reusable page components
 ├── databaseconnection.php   # MySQL connection setup
 ├── sourcecode.php           # Core dynamic source code viewer
 ├── searchdata.php           # PHP search query handler
 ├── sitemap.xml              # SEO sitemap
 └── index.php                # Homepage (main UI)
```

---

## ⚙️ Installation & Setup

### Prerequisites

* PHP 8.0 or higher
* MySQL 5.7+
* Apache server (XAMPP, WAMP, or LAMP recommended)

### Setup Steps

```bash
# Clone this repository
git clone https://github.com/codiebyheaart/client_Web_dilsecodie.git

# Move to project directory
cd client_Web_dilsecodie

# Place folder in your Apache root directory (e.g. htdocs/)
# Start Apache and MySQL
```

* Import your SQL database (if applicable)
* Open browser → `http://localhost/client_Web_dilsecodie`

---

## 🧠 Core Logic

### 🔹 Copy to Clipboard Function

JavaScript logic for copy buttons:

```javascript
function copyCode(codeBoxId) {
  const code = document.getElementById(codeBoxId).innerText;
  navigator.clipboard.writeText(code);
  alert('Code copied to clipboard!');
}
```

### 🔹 Search Repository Logic (PHP + AJAX)

```php
if (isset($_POST['query'])) {
  $search = $_POST['query'];
  $result = mysqli_query($conn, "SELECT * FROM sourcecode WHERE title LIKE '%$search%'");
  // return JSON or render search results dynamically
}
```

---

## 🔍 SEO Keywords

**PHP code viewer**, **dynamic code repository**, **code copy website**,
**JavaScript copy to clipboard app**, **syntax highlighting web tool**,
**PHP MySQL code snippet viewer**, **open source code-sharing web app**.

---

## 🧩 Future Enhancements

* 🌗 Dark/Light Theme Toggle
* 🧾 User login & personal code collection
* 🔄 API for fetching code snippets
* 📤 File upload for tutorials and examples
* 📱 Full responsive redesign with Bootstrap

---

## 👨‍💻 Author

**Created by [CodieByHeaart](https://github.com/codiebyheaart)**
📧 Contact: [dilsecodie@gmail.com](mailto:dilsecodie@gmail.com)

---

⭐ **If you found this project helpful, please give it a star on GitHub!** ⭐
Bringing developers together through clean UI and open-source PHP logic 💻✨
