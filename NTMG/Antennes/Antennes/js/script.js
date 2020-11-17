function showForm(){


  let type = document.querySelector("#selectType").value

  console.log(type)

  let allSimp = document.querySelector("#alleSimple")
  let allRet = document.querySelector("#alleRetour")

  if(type === "option-1"){
    allSimp.setAttribute("class","active");
    allRet.setAttribute("class","formini");
  }else{
    allSimp.setAttribute("class","formini");
    allRet.setAttribute("class","active");

  }

}

