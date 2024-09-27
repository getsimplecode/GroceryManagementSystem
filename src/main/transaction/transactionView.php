<style>
    .Addbtn button {
    background-color: #104FF4;
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 12px;
    cursor: pointer;
    border-radius: 5px;


}

.Addbtn button:hover {
  background-color: darkblue;
}

.Addbtn button:active {
  background-color: #3e8e41;
}

.Addbtn button:disabled {
  background-color: #cccccc;
  cursor: not-allowed;
}

.Addbtn button:focus {
  outline: none;
  box-shadow: 0 0 3px 2px rgba(0, 123, 255, 0.5);
}
.mainboard{

    background-color: #e6e1e1;
    width: 100%;
    height: 94vh;
    box-shadow: 0 0 3px 2px rgba(117, 113, 113);
}
.topnav{
    background-color: #2d3ded;
    
}
</style>

<div class="mainboard">
    <nav class="topnav">
    <div class="Addbtn">
        <button onclick="Location.href">Add</button>
    </div>
    </nav>
</div>
