/ * ================================================ ============
 * Bootstrap-dropdown.js v2.0.2
 * Http://twitter.github.com/bootstrap/javascript.html # dropdowns
 * ================================================= ===========
 * Derechos de Autor 2012 de Twitter, Inc.
 *
 * Licenciado bajo la licencia Apache, Versión 2.0 (la "Licencia");
 * No se puede utilizar este archivo excepto en conformidad con la Licencia.
 * Usted puede obtener una copia de la Licencia en
 *
 * Http://www.apache.org/licenses/LICENSE-2.0
 *
 * A menos que requerido por la ley aplicable o se acuerde por escrito, el software
 * Distribuido bajo la licencia se distribuye "TAL CUAL",
 * SIN GARANTÍAS NI CONDICIONES DE NINGÚN TIPO, ya sean expresas o implícitas.
 * Consulte la licencia para el idioma específico que rige los permisos y
 * Limitaciones en la licencia.
 * ================================================= =========== * /


! la función ( $ ) {

  "Use strict"

 / * CLASE DESPLEGABLE DEFINICIÓN
  * ========================= * /

  var toggle =  '[datos de palanca = "desplegable"]'
    ,  Desplegable  =  función  ( elemento )  {
        var $ el = $ ( elemento ). sobre ( 'click.dropdown.data-api' ,  este . alternar )
        $ ( 'html' ). sobre ( 'click.dropdown.data-api' ,  la función  ()  {
          $ El . padre (). removeClass ( "abierta" )
        })
      }

  Desplegable . prototipo =  {

    constructor :  Desplegable

  , palanca :  la función  ( e )  {
      var $ this = $ ( este )
        , selector = $ this . attr ( '-destino de los datos' )
        , $ matriz
        , isActive

      si  (! selector )  {
        selector = $ this . attr ( 'href' )
        selector = selector && selector . reemplazar ( /. * (? = # [^ \ s] * $) / ,  '' )  / / tira para ie7
      }

      $ Matriz = $ ( selector )
      $ Matriz . longitud | |  ( $ matriz = $ this . padres ())

      isActive = $ matriz . hasClass ( "abierta" )

      clearMenus ()
      ! isActive && $ matriz . toggleClass ( "abierta" )

      volver  falsa
    }

  }

  de función clearMenus ()  {
    $ ( toggle ). padres (). removeClass ( "abierta" )
  }


  / * PLUGIN DESPLEGABLE DEFINICIÓN
   * ========================== * /

  $ . fn . desplegable =  función  ( opción )  {
    devolver  este . cada ( función  ()  {
      var $ this = $ ( este )
        , los datos = $ this . datos ( 'desplegable' )
      si  (! datos ) $ this . datos ( 'desplegables' ,  ( datos =  nuevo  desplegable ( este )))
      si  ( typeof opción ==  'cadena' ) de datos [ opción ]. llamada ( $ this )
    })
  }

  $ . fn . desplegable . Constructor  =  desplegable


  / * Aplican a los elementos desplegables ESTÁNDAR
   * =================================== * /

  $ ( función  ()  {
    $ ( 'html' ). sobre ( 'click.dropdown.data-api' , clearMenus )
    $ ( "cuerpo" ). sobre ( 'click.dropdown.data-api' , de palanca ,  desplegable . prototipo . alternar )
  })

} ( ventana . jQuery );