function onlyNumberKey(evt) {
  // Only ASCII character in that range allowed
  var ASCIICode = evt.which ? evt.which : evt.keyCode;
  if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) return false;
  return true;
}

function print_soc_dev() {
  var divContents = document.getElementById("printcontent").innerHTML;
  var a = window.open("", "", "");
  a.document.write("<html>");
  a.document.write("<body >");
  a.document.write(
    '<h5 style="text-align:center;">Total Household Polpulation by Age and sex (psa.gov.ph) </h5>',
    divContents
  );
  a.document.write("</body></html>");
  a.document.close();
  a.print();
}

const searchContainer = document.getElementById("search_result_container");
const search_lists = document.querySelectorAll(".search_list");
const search_input = document.querySelector(".search_input");

//
//
if (search_input.value.length < 1) {
  searchContainer.style.display = "none";
}

function searchOnChange() {
  if (search_input.value.length >= 1) {
    searchContainer.style.display = "";
  } else {
    searchContainer.style.display = "none";
  }

  for (let i = 0; i < search_lists.length; i++) {
    if (
      search_lists[i].textContent
        .toLowerCase()
        .indexOf(search_input.value.toLowerCase()) > -1
    ) {
      search_lists[i].style.display = "block";
    } else {
      search_lists[i].style.display = "none";
    }
  }
}

function barangaySession(e) {
  document.cookie = `barangay = ${e.value} ; expires=Thu, 18 Dec 3000 12:00:00 UTC `;
  window.location.reload();
}
function yearSession(e) {
  document.cookie = `year = ${e.value} ; expires=Thu, 18 Dec 3000 12:00:00 UTC`;
  window.location.reload();
}

const soc_dev_form_session = document.querySelectorAll(".soc_dev_form_btn");

soc_dev_form_session.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    soc_dev_form_session.forEach((btns) => {
      btns.classList.remove("active");
    });
    btn.classList.add("active");
    document.cookie = `soc_dev_form_btn = ${btn.name}`;
  });
});

if (
  window.location.pathname === "/barangay/dashboard.php" ||
  window.location.pathname === "/barangay/records/social_development_sector.php"
) {
  document.getElementById("sidebar_navigations").style.display = "none";
}

document.querySelectorAll(".save_modal_exit").forEach((btn) => {
  btn.addEventListener("click", () => {
    console.log("dgnn");
    document.cookie = "popup_modal = ''";
    window.location.reload();
  });
});

const update_soc_dev = (barangay) => {
  console.log(barangay);
};

function navSelection(e) {
  console.log(e);
  document.cookie = `nav_selection =  ${e}`;
}
