!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],e):e(CodeMirror)}((function(e){"use strict";e.defineMode("pig",(function(e,O){var T=O.keywords,E=O.builtins,I=O.types,t=O.multiLineStrings,N=/[*+\-%<>=&?:\/!|]/;function A(e,O,T){return O.tokenize=T,T(e,O)}function r(e,O){for(var T,E=!1;T=e.next();){if("/"==T&&E){O.tokenize=R;break}E="*"==T}return"comment"}function R(e,O){var S,n=e.next();return'"'==n||"'"==n?A(e,O,(S=n,function(e,O){for(var T,E=!1,I=!1;null!=(T=e.next());){if(T==S&&!E){I=!0;break}E=!E&&"\\"==T}return(I||!E&&!t)&&(O.tokenize=R),"error"})):/[\[\]{}\(\),;\.]/.test(n)?null:/\d/.test(n)?(e.eatWhile(/[\w\.]/),"number"):"/"==n?e.eat("*")?A(e,O,r):(e.eatWhile(N),"operator"):"-"==n?e.eat("-")?(e.skipToEnd(),"comment"):(e.eatWhile(N),"operator"):N.test(n)?(e.eatWhile(N),"operator"):(e.eatWhile(/[\w\$_]/),T&&T.propertyIsEnumerable(e.current().toUpperCase())&&!e.eat(")")&&!e.eat(".")?"keyword":E&&E.propertyIsEnumerable(e.current().toUpperCase())?"variable-2":I&&I.propertyIsEnumerable(e.current().toUpperCase())?"variable-3":"variable")}return{startState:function(){return{tokenize:R,startOfLine:!0}},token:function(e,O){return e.eatSpace()?null:O.tokenize(e,O)}}})),function(){function O(e){for(var O={},T=e.split(" "),E=0;E<T.length;++E)O[T[E]]=!0;return O}var T="ABS ACOS ARITY ASIN ATAN AVG BAGSIZE BINSTORAGE BLOOM BUILDBLOOM CBRT CEIL CONCAT COR COS COSH COUNT COUNT_STAR COV CONSTANTSIZE CUBEDIMENSIONS DIFF DISTINCT DOUBLEABS DOUBLEAVG DOUBLEBASE DOUBLEMAX DOUBLEMIN DOUBLEROUND DOUBLESUM EXP FLOOR FLOATABS FLOATAVG FLOATMAX FLOATMIN FLOATROUND FLOATSUM GENERICINVOKER INDEXOF INTABS INTAVG INTMAX INTMIN INTSUM INVOKEFORDOUBLE INVOKEFORFLOAT INVOKEFORINT INVOKEFORLONG INVOKEFORSTRING INVOKER ISEMPTY JSONLOADER JSONMETADATA JSONSTORAGE LAST_INDEX_OF LCFIRST LOG LOG10 LOWER LONGABS LONGAVG LONGMAX LONGMIN LONGSUM MAX MIN MAPSIZE MONITOREDUDF NONDETERMINISTIC OUTPUTSCHEMA  PIGSTORAGE PIGSTREAMING RANDOM REGEX_EXTRACT REGEX_EXTRACT_ALL REPLACE ROUND SIN SINH SIZE SQRT STRSPLIT SUBSTRING SUM STRINGCONCAT STRINGMAX STRINGMIN STRINGSIZE TAN TANH TOBAG TOKENIZE TOMAP TOP TOTUPLE TRIM TEXTLOADER TUPLESIZE UCFIRST UPPER UTF8STORAGECONVERTER ",E="VOID IMPORT RETURNS DEFINE LOAD FILTER FOREACH ORDER CUBE DISTINCT COGROUP JOIN CROSS UNION SPLIT INTO IF OTHERWISE ALL AS BY USING INNER OUTER ONSCHEMA PARALLEL PARTITION GROUP AND OR NOT GENERATE FLATTEN ASC DESC IS STREAM THROUGH STORE MAPREDUCE SHIP CACHE INPUT OUTPUT STDERROR STDIN STDOUT LIMIT SAMPLE LEFT RIGHT FULL EQ GT LT GTE LTE NEQ MATCHES TRUE FALSE DUMP",I="BOOLEAN INT LONG FLOAT DOUBLE CHARARRAY BYTEARRAY BAG TUPLE MAP ";e.defineMIME("text/x-pig",{name:"pig",builtins:O(T),keywords:O(E),types:O(I)}),e.registerHelper("hintWords","pig",(T+I+E).split(" "))}()}));