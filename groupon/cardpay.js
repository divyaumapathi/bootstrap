(function()
{
	var cardModel=Backbone.Model.extend({
		urlRoot:'/crd'
	});

var cardView=Backbone.View.extend(
{
	el:'#crdnum',
	events:
	{
		'click #sbmt':'saveDetails'
	},
	saveDetails:function(e)
	{
		e.preventDefault();
		var modobj=new cardModel();
		modobj.save(
		{
			'card-number4':$('#crdnum4').val(),
			'nameoncard':$('#crdname').val(),
			'cvv-number':$('#cvv').val(),
			'captcha':$('cptcha').val()
		},{
        	success : function(model,response){
        		if(response == true)
        		{
        			alert('success');
        		}
        		else
        		{
        			alert('failed');	
        		}        		
        	}
       })
	}
});
var viewobj=new cardView();
})();