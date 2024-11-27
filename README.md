# ERP Management System

This is a simple ERP (Enterprise Resource Planning) system developed using **PHP**, **MySQL**, **Bootstrap**, **CSS**, and **JavaScript**. The system allows users to manage customers, items, and generate reports with functionality to insert, update, delete, and search data.

---

## Features

### 1. Customer Management
- Add new customers with form validation.
- View a list of all registered customers.
- Fields:
  - Title (Mr/Mrs/Miss/Dr)
  - First Name
  - Last Name
  - Contact Number
  - District

### 2. Item Management
- Add and manage item details with form validation.
- View a list of all registered items.
- Fields:
  - Item Code
  - Item Name
  - Item Category (dropdown)
  - Item Subcategory (dropdown)
  - Quantity
  - Unit Price

### 3. Reports
- **Invoice Report**: View invoices based on a date range.
  - Includes: Invoice Number, Date, Customer, Customer District, Item Count, Invoice Amount.
- **Invoice Item Report**: View detailed invoice items based on a date range.
  - Includes: Invoice Number, Invoiced Date, Customer Name, Item Name, Item Code, Item Category, Item Unit Price.
- **Item Report**: View item details.
  - Includes: Item Name (unique), Item Category, Item Subcategory, Quantity.

---

## Tech Stack

### Frontend:
- **HTML5**
- **CSS3**
- **Bootstrap**: For responsive design and layout.
- **JavaScript**: For form validation and dynamic interactions.

### Backend:
- **PHP**: Core logic and server-side functionality.

### Database:
- **MySQL**: For storing and managing data.

---
