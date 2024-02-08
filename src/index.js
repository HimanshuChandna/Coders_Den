window.onload = date = () =>{
    const date = new Date();
    const year = date.getFullYear();
    document.getElementById("date").innerHTML = year;
    console.log(date);
  };