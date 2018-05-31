/* 
****************************************************************************************************************
Betsy Steinert
Lab 6
05/18/2018
*****************************************************************************************************************
*/

SET VERIFY OFF
SET SERVEROUTPUT ON

DECLARE

    iCustID ORDERS.CustID%TYPE;
    iOrderID ORDERS.OrderID%TYPE;
    iPartID INVENTORY.PartID%TYPE;
    iQty INVENTORY.StockQty%TYPE;
    
    vCName CHAR(40);
    vOrders  ORDERS.SalesDate%TYPE;
    vParts  INVENTORY.Description%TYPE;
    vDetail ORDERITEMS.Detail%TYPE;
    vStockQty INVENTORY.StockQty%TYPE;
    vCount NUMBER(20)  := 0;
    vMsg VARCHAR2(80);
    badOrders EXCEPTION;
    
BEGIN

      iCustID    := '&1';
      iOrderID   := '&2'; 
      iPartID    := '&3'; 
      iQty  := '&4';
    
    vCName := 'Customer Name';
   
    vMsg := 'BS_Lab6 transaction program by Betsy Steinert';
    DBMS_OUTPUT.PUT_LINE(vMsg);
    

        BEGIN
        SELECT CName INTO vCName
        FROM CUSTOMERS
        WHERE CustID = iCustID;
        vMsg := '- CustID ' || iCustID || ' is valid.';
        DBMS_OUTPUT.PUT_LINE (vMsg);
    EXCEPTION  
        WHEN NO_DATA_FOUND THEN
            vCount := vCount +1;
            vMsg := '- CustID is Invalid: ' || iCustID;
            DBMS_OUTPUT.PUT_LINE (vMsg);
        WHEN OTHERS THEN
            vMsg := '- ' || SQLCODE || ' :: ' || SQLERRM; 
            DBMS_OUTPUT.PUT_LINE (vMsg);
    END;
    
BEGIN 

        SELECT SalesDate INTO vOrders
        FROM ORDERS
        WHERE OrderID = iOrderID;
        vMsg := '- OrderID ' || iOrderID || ' is valid.';
        DBMS_OUTPUT.PUT_LINE (vMsg);
    EXCEPTION 
        WHEN NO_DATA_FOUND THEN
           vCount := vCount +1;
            vMsg := '- Invalid OrderID: ' || iOrderID;
            DBMS_OUTPUT.PUT_LINE (vMsg);
        WHEN OTHERS THEN
            vMsg := '-- ' || SQLCODE || ' :: ' || SQLERRM; 
            DBMS_OUTPUT.PUT_LINE (vMsg);
    END;
    
    BEGIN
        SELECT SalesDate
        INTO vOrders
        FROM ORDERS
        WHERE CustID = iCustID 
        AND OrderID = iOrderID;
        vMsg := '- Pairing is valid';
        DBMS_OUTPUT.PUT_LINE(vMsg);
    EXCEPTION
        WHEN NO_DATA_FOUND THEN
           vCount := vCount + 1;
            vMsg := '- Invalid Pairing, please check the CustID and OrderID and try again';
            DBMS_OUTPUT.PUT_LINE(vMsg);
        WHEN OTHERS THEN
             vMsg := '-- ' || SQLCODE || ' :: ' || SQLERRM; 
            DBMS_OUTPUT.PUT_LINE (vMsg);
    END;
    
BEGIN
        SELECT Description
        INTO vParts
        FROM INVENTORY
        WHERE PartID = iPartID;
        vMsg := '- PartID ' || iPartID || ' is valid.';
        DBMS_OUTPUT.PUT_LINE (vMsg);
    EXCEPTION 
        WHEN NO_DATA_FOUND THEN
            vCount := vCount +1;
            vMsg := '- Invalid PartID: ' || iPartID;
            DBMS_OUTPUT.PUT_LINE (vMsg);
        WHEN OTHERS THEN
            vMsg := '-- ' || SQLCODE || ' :: ' || SQLERRM; 
            DBMS_OUTPUT.PUT_LINE (vMsg);
    END;

 DECLARE
        Invalid_Qty EXCEPTION;
        
        BEGIN
        
        IF (iQty <=0)  THEN
        RAISE Invalid_Qty;
        ELSE vMsg := ('- Valid Qty Input');
        DBMS_OUTPUT.PUT_LINE(vMsg);
        END IF;
        
        EXCEPTION
            WHEN Invalid_Qty THEN
            vCount := vCount + 1;
            vMsg := ('- Quantity entered must be greater than zero');
            DBMS_OUTPUT.PUT_LINE(vMsg);
             WHEN OTHERS THEN
            vMsg := '-- ' || SQLCODE || ' :: ' || SQLERRM; 
            DBMS_OUTPUT.PUT_LINE (vMsg);

    
      IF vCount = 1 THEN
      RAISE badOrders;
    END IF;
    
END;
 

BEGIN

SAVEPOINT mySavePoint;

SELECT NVL(MAX((Detail) + 1), 1)
    INTO vDetail
    FROM ORDERITEMS
    WHERE ORDERITEMS.OrderID = iOrderID;


INSERT INTO ORDERITEMS(OrderID, Detail, PartID, Qty)
    VALUES(iOrderID, vDetail, iPartID, iQty);
UPDATE INVENTORY
SET Stockqty = Stockqty - iQty
WHERE PartID = iPartID;

SELECT Stockqty INTO vStockQty
FROM INVENTORY
WHERE PartID = iPartID;

IF vStockqty < 0 THEN
vMsg := 'Insufficient stock Qty, Can not complete transaction';
DBMS_OUTPUT.PUT_LINE(vMsg);
ROLLBACK to mySavePoint;
ELSE 
vMsg := 'Customer transaction processed' || iCustID || 
              'added' || iQty || 'of PartID ' || iPartID || ' to OrderID ' || iOrderID;              
COMMIT;
END IF;



    EXCEPTION
    WHEN badOrders THEN
    DBMS_OUTPUT.PUT_LINE ('bad order');
    
   WHEN NO_DATA_FOUND THEN
      DBMS_OUTPUT.PUT_LINE('RECORD NOT FOUND');     -- Problem: which record was not found?
   WHEN OTHERS THEN
      DBMS_OUTPUT.PUT_LINE(SQLERRM);
END;

END;
    
    