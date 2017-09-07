var tags = [];
var tagInput = document.getElementById("tagInput");
var tagContainer = document.getElementById("tagContainer");
var tagNo=0;

tagInput.addEventListener("keypress", function (e) {
	var key = e.keyCode;
	if ((key === 13)&&(tagInput.value!=="")) { // 13 is enter
		tagNo++;
		tags.push(tagInput.value);
		for (var i=0; i<tags.length; i++) {
            console.log(tags[i]);
            tagInput.value="";
        }
		addTag();
	}
});

function addTag() {
	var newTag = document.createElement("div");
	newTag.setAttribute("id","tag"+tagNo);
	newTag.setAttribute("class","tags");
	newTag.setAttribute("onclick","remove(this.id)");
	newTag.innerHTML = tags[tags.length-1];
	tagContainer.appendChild(newTag);
}

function remove(elemId) {
	var elem = document.getElementById(elemId);
	elem.parentNode.removeChild(elem);
	
	for (var i=0; i<tags.length; i++) {
		if(elem.innerHTML===tags[i]) {
			tags.splice(i, 1);
		}
	}
}