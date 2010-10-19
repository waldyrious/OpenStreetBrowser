function _toolbox_manager() {
  // register
  this.register=function(toolbox) {
    toolbox.manager=this;
    this.toolboxes.push(toolbox);
    this.show_buttons();
  }

  // activate_toolbox
  this.activate_toolbox=function(index) {
    if(typeof index!="number") {
      for(var i=0; i<this.toolboxes.length; i++) {
	if(this.toolboxes[i]==index)
	  index=i;
      }
    }

    if(this.current_active>-1) {
      this.toolboxes[this.current_active].notify_deactivate();
      this.toolboxes[this.current_active].button.className="toolboxbutton";
      this.toolboxes[this.current_active].content.className="toolbox";
    }

    if((this.current_active==index)||(index==-1)) {
      this.current_active=-1;
      this.resize_toolbox();
      return;
    }

    this.current_active=index;
    this.toolboxes[index].notify_activate();
    this.toolboxes[index].button.className="toolboxbutton_active";
    this.toolboxes[index].content.className="toolbox_active";
    this.resize_toolbox();
  }

  // resize_toolbox
  this.resize_toolbox=function() {
    var toolbox=document.getElementById("toolbox_container");
    var search=document.getElementById("search");
    var details=document.getElementById("details");
    var size=toolbox.offsetHeight;

    search.style.top=143+size;
    details.style.top=180+size;
  }

  // show_buttons
  this.show_buttons=function() {
    var toolbox_buttons=document.getElementById("toolboxbuttons_table");
    var toolbox_divs=document.getElementById("toolbox_container");

    for(var i=0; i<this.toolboxes.length; i++) {
      var tb=this.toolboxes[i];
      tb.button.onclick=this.activate_toolbox.bind(this, i);
      tb.button.className="toolboxbutton";
      tb.content.className="toolbox";
      toolbox_divs.appendChild(tb.content);
    }

    var newtds=[];
    var max_done=-100;
    while(newtds.length!=this.toolboxes.length) {
      var min_tds=[];
      var min_wgt=100;

      for(var i=0; i<this.toolboxes.length; i++) {
	var tb=this.toolboxes[i];

	if((tb.options.weight<min_wgt)&&(tb.options.weight>max_done)) {
	  min_wgt=tb.options.weight;
	  min_tds=[];
	}
	if(tb.options.weight==min_wgt) {
	  min_tds.push(tb);
	}
      }

      newtds=newtds.concat(min_tds);
      max_done=min_wgt;
    }

    for(var i=0; i<newtds.length; i++) {
      toolbox_buttons.rows[0].appendChild(newtds[i].button);
    }
  }

  // constructor
  this.toolboxes=[];
  this.current_active=-1;
}

var toolbox_manager=new _toolbox_manager();

function register_toolbox(toolbox) {
  return toolbox_manager.register(toolbox);
}