
<style>
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 10px;
}

/* Styling for the left side of the nav */
.nav-left a {
    color: white;
    padding: 14px 20px;
    text-decoration: none;
    text-align: center;
}

.nav-left a:hover {
    background-color: #ddd;
    color: black;
}

/* Styling for the right side of the nav */
.nav-right {
    display: flex;
    align-items: center;
}

.nav-right input[type="text"] {
    padding: 6px;
    margin-right: 10px;
    border: none;
    border-radius: 4px;
}

/* Button styling */
.nav-right button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 12px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    transition: background-color 0.3s, box-shadow 0.3s;
}

.nav-right button:hover {
    background-color: #45a049;
}

.nav-right button:active {
    background-color: #3e8e41;
}

.nav-right button:disabled {
    background-color: #cccccc;
    cursor: not-allowed;
}

.nav-right button:focus {
    outline: none;
    box-shadow: 0 0 3px 2px rgba(0, 123, 255, 0.5);
}
</style>
<nav class="navbar">
        <div class="nav-left">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="nav-right">
            <input type="text" placeholder="Search..">
            <button onclick="window.location.href='your-url-here'">Search</button>
        </div>
    </nav>
