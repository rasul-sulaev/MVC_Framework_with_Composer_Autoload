let form = document.querySelectorAll('.form');

form.forEach(f => {
  f.onsubmit = async (e) => {
    e.preventDefault();

    try {
      let response = await fetch(e.target.action, {
        method: e.target.method,
        body: new FormData(f)
      })

     let json = await response.json();

      if (json.url) {
        location.href = json.url;
      } else {
        alert(`${json.status} - ${json.message}`);
      }
    } catch (err) {
      console.log(err)
    }
  }
})