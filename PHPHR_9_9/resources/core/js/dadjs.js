// JavaScript Document
$('#copy_address').click(function(){
	$('#customer_name').val($('#company_name').val());
	$('#customer_phone').val($('#company_phone').val());
	$('#customer_email').val($('#company_email').val());
});
$('#copy_address2').click(function(){
	$('#billing_street').val($('#company_street').val());
	$('#billing_city').val($('#company_city').val());
	$('#billing_state').val($('#company_state').val());
	$('#billing_zip').val($('#company_zip').val());
	$('#billing_country').val($('#company_country').val());
});

$('#copy_billing').click(function(){
	$('#shipping_street').val($('#billing_street').val());
	$('#shipping_city').val($('#billing_city').val());
	$('#shipping_state').val($('#billing_state').val());
	$('#shipping_zip').val($('#billing_zip').val());
	$('#shipping_country').val($('#billing_country').val());
});



//Delete lead --Lead-view
function delete_lead(url)
{

	if (confirm("If you delete this lead all the data of this lead including proposals, call history, appointments will be deleted permanentantly.\nDo you still want to delete this lead?")==true){
		if (confirm("Are you sure, you want to delete this lead?") == true) {
    			window.location.href = url;
		}
	}
}

//Convert Lead to Customer --Lead-view
function convert(url)
{
	if (confirm("Are you sure, you want to convert this lead to customer?") == true) {
    window.location.href = url;
	}
}

//Remove Lead Photo for Edit page to Lead --Lead-edit
function remove_lead_edit_photo(url)
{
	if (confirm("Are you sure, you want to remove this lead image?") == true) {
    window.location.href = url;
	}
}

//Delete Lead Contacts-- Lead/view/contacts
function delete_lead_contacts(url)
{
	if (confirm("Are you sure, you want to delete this contacts?") == true) {
    window.location.href = url;
	}
}

//Delete Lead Calls-- Lead/view/calls
function delete_lead_call(url)
{
	if (confirm("Are you sure, you want to delete this call?") == true) {
    window.location.href = url;
	}
}

//Delete Lead Calls-- Lead/view/calls
function delete_lead_docs(url)
{
	if (confirm("Are you sure, you want to delete this docs?") == true) {
    window.location.href = url;
	}
}

//Delete Lead Calls-- Lead/view/calls
function delete_lead_expense(url)
{
	if (confirm("Are you sure, you want to delete this expense?") == true) {
    window.location.href = url;
	}
}






//Delete Lead Appointments-- Lead/view/appointments
function delete_lead_appointment(url)
{
	if (confirm("Are you sure, you want to delete this appointment?") == true) {
    window.location.href = url;
	}
}

//Delete Lead Notes-- Lead/view/notes
function delete_lead_notes(url)
{
	if (confirm("Are you sure, you want to delete this note?") == true) {
    window.location.href = url;
	}
}

//Delete Lead Proposals-- Lead/view/proposals
function delete_lead_proposal(url)
{
	if (confirm("Are you sure, you want to delete this proposal?") == true) {
    window.location.href = url;
	}
}

/////////////////////////////////////////Customers Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start////////////////////////////////////////////////////

//Delete Customers-- Customers/view
function delete_customer(url)
{

	if (confirm("If you delete this customer all the data of this customer including proposals, estimates, invoices, tickets  will be deleted permanentantly.\nDo you still want to delete this customers?")==true){
		if (confirm("Are you sure, you want to delete this customer?") == true) {
    			window.location.href = url;
		}
	}
}

//Remove Customer Photo Edit page in Customers --customers-edit
function remove_cus_edit_photo(url)
{
	if (confirm("Are you sure, you want to remove this customer image?") == true) {
    window.location.href = url;
	}
}

//Delete Customer Contacts-- Customers/view/contacts
function delete_cus_contacts(url)
{
	if (confirm("Are you sure, you want to delete this contacts?") == true) {
    window.location.href = url;
	}
}

//Delete Customer Calls-- Customers/view/calls
function delete_cus_call(url)
{
	if (confirm("Are you sure, you want to delete this call?") == true) {
    window.location.href = url;
	}
}

//Delete Customer Appointments-- Customers/view/appointment
function delete_cus_appointment(url)
{
	if (confirm("Are you sure, you want to delete this appointment?") == true) {
    window.location.href = url;
	}
}

//Delete Customer Notes-- Customers/view/notes
function delete_cus_notes(url)
{
	if (confirm("Are you sure, you want to delete this note?") == true) {
    window.location.href = url;
	}
}

//Delete Customer Messages-- Customers/view/messages
function delete_cus_messages(url)
{
	if (confirm("Are you sure, you want to delete this message?") == true) {
    window.location.href = url;
	}
}


//Delete Customer Proposals-- Customers/view/proposals
function delete_cus_proposal(url)
{
	if (confirm("Are you sure, you want to delete this proposal?") == true) {
    window.location.href = url;
	}
}

//Delete Customer Estimates-- Customers/view/estimates
function delete_cus_estimates(url)
{
	if (confirm("Are you sure, you want to delete this estimate?") == true) {
    window.location.href = url;
	}
}

//Delete Customer Invoices-- Customers/view/invoices
function delete_cus_invoice(url)
{
	if (confirm("Are you sure, you want to delete this invoice?") == true) {
    window.location.href = url;
	}
}


//Delete Customer Docs
function delete_cust_docs(url)
{
	if (confirm("Are you sure, you want to delete this docs?") == true) {
    window.location.href = url;
	}
}

//Delete Customer Expense
function delete_cust_expense(url)
{
	if (confirm("Are you sure, you want to delete this expense?") == true) {
    window.location.href = url;
	}
}




//Delete Customer Tickets-- Customers/view/ticket
function delete_cus_ticket(url)
{
	if (confirm("Are you sure, you want to delete this ticket?") == true) {
    window.location.href = url;
	}
}

/////////////////////////////////////////Catalog Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start///////////////////////////////////////////////////

//Delete Products-- Catalog/Products
function delete_products(url)
{
	if (confirm("Are you sure, you want to delete this product?") == true) {
    window.location.href = url;
	}
}

//Delete Category-- Catalog/Category
function delete_category(url)
{
	if (confirm("Are you sure, you want to delete this category?") == true) {
    window.location.href = url;
	}
}

/////////////////////////////////////////Sales Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start///////////////////////////////////////////////////

function delete_proposals(url)

{

	if (confirm("Are you sure, you want to delete this proposal?") == true) {

    window.location.href = url;

	}

}

/////////////////////////////////////////////Start///////////////////////////////////////////////////

function delete_Estimates(url)

{

	if (confirm("Are you sure, you want to delete this estimate?") == true) {

    window.location.href = url;

	}

}

/////////////////////////////////////////////Start///////////////////////////////////////////////////

function delete_invoices(url)

{

	if (confirm("Are you sure, you want to delete this invoice?") == true) {

    window.location.href = url;

	}

}

/////////////////////////////////////////Broadcast Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start///////////////////////////////////////////////////

//Delete Expense-- Expenses/view
function delete_news(url)
{
	if (confirm("Are you sure, you want to delete this news?") == true) {
    window.location.href = url;
	}
}




/////////////////////////////////////////Expenses Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start///////////////////////////////////////////////////

//Delete Expense-- Expenses/view
function delete_expence(url)
{
	if (confirm("Are you sure, you want to delete this expense?") == true) {
    window.location.href = url;
	}
}

//Delete Expense receipt-- Expenses/view from edit section
function remove_receipt(url)
{
	if (confirm("Are you sure, you want to remove this expense receipt?") == true) {
    window.location.href = url;
	}
}

/////////////////////////////////////////Support Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start///////////////////////////////////////////////////

//Delete Ticket --Support/view
function delete_ticket(url)
{
	if (confirm("Are you sure, you want to delete this ticket?") == true) {
    window.location.href = url;
	}
}

/////////////////////////////////////////Reports Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start///////////////////////////////////////////////////


//Delete proposals --Reports/Proposals Report
function delete_proposals_report(url)
{
	if (confirm("Are you sure, you want to delete this proposal?") == true) {
    window.location.href = url;
	}
}

//Delete estimates --Reports/Estimates Report
function delete_estimate_report(url)
{
	if (confirm("Are you sure, you want to delete this estimate?") == true) {
    window.location.href = url;
	}
}

//Delete invoices --Reports/Invoices Report
function delete_invoice_report(url)
{
	if (confirm("Are you sure, you want to delete this invoice?") == true) {
    window.location.href = url;
	}
}

/////////////////////////////////////////Staff Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start///////////////////////////////////////////////////

//Delete Staff --Staff/view
function delete_staff(url)
{
	if (confirm("Are you sure, you want to delete this staff member?") == true) {
    window.location.href = url;
	}
}

//Delete Staff photo --Staff/Edit
function remove_staff_photo(url)
{
	if (confirm("Are you sure, you want to remove this staff member image?") == true) {
    window.location.href = url;
	}
}

//Delete Department --Staff/departments
function delete_department(url)
{
	if (confirm("Are you sure, you want to delete this department?") == true) {
    window.location.href = url;
	}
}

//Delete Country --Setup/country
function delete_role(url)
{
	if (confirm("Are you sure, you want to delete this role?") == true) {
    window.location.href = url;
	}
}

/////////////////////////////////////////Settings Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start///////////////////////////////////////////////////

//Delete Security --Settings/security
function delete_security(url)
{
	if (confirm("Are you sure, you want to delete this IP?") == true) {
    window.location.href = url;
	}
}
/////////////////////////////////////////Daily Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start///////////////////////////////////////////////////
//Delete Quote--Quote/view
function delete_quote(url)
{
	if (confirm("Are you sure, you want to delete this Quote?") == true) {
    window.location.href = url;
	}
}

//Delete Notice--Notice/view
function delete_notice(url)
{
	if (confirm("Are you sure, you want to delete this Notice?") == true) {
    window.location.href = url;
	}
}

/////////////////////////////////////////Setup Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start///////////////////////////////////////////////////

//Delete Country --Setup/country
function delete_country(url)
{
	if (confirm("Are you sure, you want to delete this country?") == true) {
    window.location.href = url;
	}
}

//Delete Source --Setup/lead source
function delete_source(url)
{
	if (confirm("Are you sure, you want to delete this source?") == true) {
    window.location.href = url;
	}
}

//Delete Source --Setup/Department
function delete_department(url)
{
	if (confirm("Are you sure, you want to delete this source?") == true) {
    window.location.href = url;
	}
}

//Delete Source --Setup/Group
function delete_group(url)
{
	if (confirm("Are you sure, you want to delete this source?") == true) {
    window.location.href = url;
	}
}


//Delete Expenses category --Setup/expenses
function delete_expenses_cat(url)
{
	if (confirm("Are you sure, you want to delete this expense?") == true) {
    window.location.href = url;
	}
}

//Delete Currency --Setup/currency
function delete_currency(url)
{
	if (confirm("Are you sure, you want to delete this currency?") == true) {
    window.location.href = url;
	}
}

//Delete Messages --Messages/view
function delete_msg(url)
{
	if (confirm("Are you sure, you want to delete this message?") == true) {
    window.location.href = url;
	}
}
/////////////////////////////////////////Profile Menu////////////////////////////////////////////////
/////////////////////////////////////////////Start///////////////////////////////////////////////////

function remove_photo(url)
{
	if (confirm("Are you sure, you want to remove this profile image?") == true) {
    window.location.href = url;
	}
}

//Delete Customer Profile image --Customer/profile
function remove_customer_profile(url)
{
	if (confirm("Are you sure, you want to remove this profile image?") == true) {
    window.location.href = url;
	}
}

function check_duplicate(siteurl,email)
{
 if(email != '')
	{
         $.ajax({
		url: siteurl + "/check_duplicate/" + email,
                success : function(response)
                {

					if(response==1)
					{
					alert("Duplicate entry. Please enter another email address");
					jQuery('#company_email').val('');

					}
					else {
						jQuery('#email').val(email);
					}

						    }
            });
	}
        else
            jQuery('#DuplicateCheck').html('');
}
