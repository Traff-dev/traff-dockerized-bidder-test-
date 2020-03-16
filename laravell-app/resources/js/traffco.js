window.onload = function() {
    var xhr;
    var url = "http://www.creative.traff.co/server/index.php";
    //var url = "http://localhost/server/index.php";
  
    function getData() {
      if (xhr) {
        if (xhr.readyState == 4 && xhr.status == 200) {
          console.log(xhr.responseText);
          // return;
          var data = JSON.parse(xhr.responseText);
          if (data.status == 1)
            switch (data.action) {
              case "get_banner":
                data.links.forEach(element => set_link(element));
                break;
            }
        }
      }
    }
  
    function set_link(element) {
      var old_link = document.getElementById(element.id);
      var el = document.createElement("html");
      el.innerHTML = element.CODE;
      new_link = el.getElementsByTagName("a")[0];
      if (element.alter_link == "none")
        old_link.setAttribute("href", new_link.getAttribute("href"));
      else old_link.setAttribute("href", element.alter_link);
      old_link.innerHTML = new_link.innerHTML;
      old_link.setAttribute(
        "onclick",
        'xhr = new XMLHttpRequest();xhr.open("POST", "' +
          url +
          '", true);xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");var pst = "action=click&id="+id;xhr.send(pst);return true;'
      );
    }
  
    function send_to_server(prm) {
      xhr = new XMLHttpRequest();
      if (xhr) {
        try {
          xhr.open("POST", url, true);
          xhr.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded"
          );
          xhr.onreadystatechange = getData;
          var pst = "";
          var raz = "";
          for (var key in prm) {
            pst += raz + key + "=" + prm[key];
            raz = "&";
          }
          xhr.send(pst);
        } catch (e) {
          console.log(
            "Banner replacement: Could not connect to server:\n" + e.toString()
          );
        }
      }
    }
  
    function add_script(id) {
      var element = document.createElement("script");
      element.setAttribute("type", "text/javascript");
      document.body.appendChild(element);
    }
  
    let arr = new Array();
    var links = document.getElementsByTagName("a");
    for (var i = 0; i < links.length; i++) {
      var id = links[i].getAttribute("id");
      if (id) {
        if (id.substr(0, 6) === "traff_") {
          arr.push(id);
        }
      }
    }
    var parm = {
      action: "get_banner",
      arr_id: arr
    };
    send_to_server(parm);
  };