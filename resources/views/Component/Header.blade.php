<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Products</title>
  <link rel="stylesheet" href="./../../app/app.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

      <style>
  /* 1. Reset & Base */
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
:root {
  --primary-color: #007bff;
  --primary-hover: #0056b3;
  --primary-focus: rgba(0, 123, 255, 0.5);
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.6;
  color: #333;
    justify-content: center;   /* horizontal centering */
  align-items: center;       /* vertical centering */

}

/* 2. Container Utility */
.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
      justify-content: center;   /* horizontal centering */
  align-items: center;       /* vertical centering */
}

/* 3. Header */
header {
  background-color: #2C3E50;
  color: #ECF0F1;
  padding: 1rem 0;
}

header .container {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo {
  font-size: 1.5rem;
  font-weight: bold;
}

nav ul {
  display: flex;
  list-style: none;
}

nav li + li {
  margin-left: 1.5rem;
}

nav a {
  color: inherit;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s;
}

nav a:hover {
  color: #1ABC9C;
}

/* 4. Main */
main {
  padding: 4rem 0;
  background-color: #F8F9F9;
}

/* 5. Footer */
footer {
  background-color: #1A252F;
  color: #AAB2BD;
  padding: 2rem 0;
  text-align: center;
}

footer p {
  margin-bottom: 0.75rem;
  font-size: 0.9rem;
}

footer .social a {
  margin: 0 0.5rem;
  color: inherit;
  text-decoration: none;
  font-size: 1.1rem;
  transition: color 0.3s;
}

footer .social a:hover {
  color: #1ABC9C;
}

/* 6. Responsive Breakpoint */
@media (max-width: 768px) {
  header .container {
    flex-direction: column;
  }

  nav ul {
    flex-direction: column;
    align-items: center;
    margin-top: 1rem;
  }

  nav li + li {
    margin-left: 0;
    margin-top: 0.75rem;
  }
}

/* Container for multiple cards */
.card-container {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
  justify-content: center;
  padding: 2rem;
  background: #f5f5f5;
}

/* Base Card */
.card {
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  overflow: hidden;
  width: 300px;
  transition: transform 0.2s, box-shadow 0.2s;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0,0,0,0.12);
}

/* Header Banner */
.card-header {
  padding: 1rem;
  font-size: 1.25rem;
  font-weight: 600;
  color: #fff;
  text-align: center;
}

/* Body / Description */
.card-body {
  padding: 1rem;
  font-size: 0.95rem;
  line-height: 1.5;
  color: #444;
}

/* Color Variants */
.card.primary    .card-header { background: #3498db; }
.card.secondary  .card-header { background: #95a5a6; }
.card.accent     .card-header { background: #d44215ff; }


.form-card {
  background: var(--card-bg);
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 12px var(--card-shadow);
  width: 90%;

    justify-content: center;
      align-items: center;

}
.form-card h2 {
  margin-bottom: 1rem;
  font-size: 1.5rem;
  
  text-align: center;
  color: cadetblue;
}

.form-group {
  margin-bottom: 1rem;
  display: flex;
  flex-direction: column;
}

.form-group label {
  margin-bottom: 0.5rem;
  font-weight: 500;
  color: cadetblue;

}

.form-group input[type="text"],
.form-group textarea {
  padding: 0.75rem;
  border: 1px solid var(--input-border);
  border-radius: 4px;
  font-size: 1rem;
  transition: border-color 0.2s;
}
.form-group input[type="text"]:focus,
.form-group textarea:focus {
  outline: none;
  border-color: var(--input-focus);
}

.checkbox-group {
  flex-direction: row;
  align-items: center;
}

.checkbox-group input[type="checkbox"] {
  margin-right: 0.5rem;
  width: 1rem;
  height: 1rem;
}

.btn {
  display: block;
  width: 100%;
  padding: 0.75rem;
  background: var(--primary);
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.2s, transform 0.1s;
}

.update-btn i {
  color: #007bff;
}

.delete-btn i {
  color: #dc3545;
}


.btn:hover {
  background: var(--primary-dark);
}

.btn:active {
  transform: translateY(1px);
}

.btn-primary {
  display: inline-block;
  padding: 0.75rem 1.25rem;
  font-size: 1rem;
  color: #ffffff;
  background-color: var(--primary-color);
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.2s ease, box-shadow 0.2s ease;
}

.btn-primary:hover {
  background-color: var(--primary-hover);
}

.btn-primary:focus {
  outline: none;
  box-shadow: 0 0 0 3px var(--primary-focus);
}

.btn-primary:active {
  background-color: var(--primary-hover);
}

.filter-form {
    max-width: 400px;
    margin: 20px auto;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 6px;
    background: #f9f9f9;
    font-family: Arial, sans-serif;
}

.form-group {
    margin-bottom: 12px;
}

.form-row {
    display: flex;
    gap: 10px;
}

label {
    display: block;
    margin-bottom: 4px;
    font-size: 14px;
    font-weight: bold;
    color: #333;
}

input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 6px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

button {
    background: #007bff;
    color: white;
    padding: 8px 14px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background: #0056b3;
}

.reset-btn {
    font-size: 14px;
    color: #555;
    text-decoration: none;
}

.reset-btn:hover {
    text-decoration: underline;
}

    </style>

      </header>
</head>
<body>

  <header>
    <div class="container">
      <div class="logo">My Products</div>
      <nav>
        <ul>
          <li><a href="{{ route('product.create') }}">Add new Task + </a></li>
        </ul>
      </nav>
    </div>
