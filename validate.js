function validb()
{
   if( document.f2.contactName.value == "" )
   {
     alert( "Please provide Ваше имя(contactName)!" );
     document.f2.contactName.focus() ;
	 
     return false;
   }
   if( document.f2.email.value == "" )
   {
     alert( "Please provide Ваш email(email)!" );
     document.f2.email.focus() ;
	 
     return false;
   }
 }
function valida()
{
   if( document.f1.Firstname.value == "" )
   {
     alert( "Please provide Имя(First name)!" );
     document.f1.Firstname.focus() ;
	 
     return false;
   }
   if( document.f1.Lastname.value == "" )
   {
     alert( "Please provide Фамилия(Last name)!" );
     document.f1.Lastname.focus() ;
	 
     return false;
   }
   if( document.f1.email.value == "" )
   {
     alert( "Please provide valid Ваш Email(email)!" );
     document.f1.email.focus() ;
	 
     return false;
   }
   if( document.f1.street.value == "" )
   {
     alert( "Please provide Улица(street)!" );
     document.f1.street.focus() ;
	 
     return false;
   }
   if( document.f1.city.value == "" )
   {
     alert( "Please provide Город(city)!" );
     document.f1.city.focus() ;
	 
     return false;
   }
    if( document.f1.Country.value == "" )
   {
     alert( "Please provide Телефон(Country)!" );
     document.f1.Country.focus() ;
	 
     return false;
   }
    if( document.f1.postcode.value == "" )
   {
     alert( "Please provide Почтовый индекс(postcode)!" );
     document.f1.postcode.focus() ;
	 
     return false;
   }
}