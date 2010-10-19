var marker_list={};
var marker_drag_control;

function marker_update(new_hash) {
  // no mlat / mlon in new_hash
  if(!(new_hash.mlat)||(!new_hash.mlon))
    return;

  // get parts of mlat- and mlon-parameters
  var mlats=new_hash.mlat.split(/,/);
  var mlons=new_hash.mlon.split(/,/);

  for(var i=0; i<mlats.length; i++) {
    // if we already set this marker, ignore
    if(marker_list[mlons[i]+"|"+mlats[i]])
      continue;

    // add marker
    marker_add(mlons[i], mlats[i]);
  }
}

function marker_permalink(permalink) {
  // initalize empty arrays
  var mlats=[];
  var mlons=[];

  // for each element in marker_list
  for(var i in marker_list) {
    var pos=i.split(/\|/);

    // push them to the arrays
    mlons.push(pos[0]);
    mlats.push(pos[1]);
  }

  // if we don't have any markers in the list, return
  if(!mlats.length)
    return ;

  // save in permalink
  permalink.mlat=mlats.join(",");
  permalink.mlon=mlons.join(",");
}

function marker(lon, lat) {
  // finish_drag
  this.finish_drag=function(pos) {
    // calculate lonlat of new position
    var lonlat=map.getLonLatFromPixel(pos).transform(map.getProjectionObject(), new OpenLayers.Projection("EPSG:4326"));

    // save new position to marker_list
    delete marker_list[this.lon+"|"+this.lat];
    this.lon=lonlat.lon;
    this.lat=lonlat.lat;
    marker_list[this.lon+"|"+this.lat]=this;

    // update permalink
    update_permalink();
  }

  // constructor
  this.lon=lon;
  this.lat=lat;

  // create the new marker
  var pos = new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"), map.getProjectionObject())
  var geo = new OpenLayers.Geometry.Point(pos.lon, pos.lat);
  this.feature = new OpenLayers.Feature.Vector(geo, 0, {
    externalGraphic: 'http://www.openstreetmap.org/openlayers/img/marker.png',
    graphicWidth: 21,
    graphicHeight: 25,
    graphicXOffset: -11,
    graphicYOffset: -25
  });
  drag_layer.addFeatures([this.feature]);
  this.feature.ob=this;

  // save marker in marker_list
  marker_list[lon+"|"+lat]=this;

  // force an update of the permalink
  update_permalink();
}

function marker_add(lon, lat) {
  return new marker(lon, lat);
}

function marker_add_context(pos) {
  // add a marker on the pos
  marker_add(pos.lon, pos.lat);
}

function marker_init() {
  contextmenu_add("img/toolbox_marker.png", "add marker", marker_add_context);
}

register_hook("get_permalink", marker_permalink);
register_hook("hash_changed", marker_update);
register_hook("init", marker_init);