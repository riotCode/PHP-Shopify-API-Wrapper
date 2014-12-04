<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        /**
         *    getCustomerSavedSearches() method
         *
         *    reference: http://docs.shopify.com/api/customersavedsearch
         */
        "getCustomerSavedSearches" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches.json",
            "summary" => "Get a list of all customer saved searches",
            "responseModel" => "defaultJsonResponse",
        ),
        
        
        /**
         *    getCustomerSavedSearchesCount() method
         *
         *    reference: http://docs.shopify.com/customersavedsearch
         */
        "getCustomerSavedSearchesCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches/count.json",
            "summary" => "Get a count of all customer saved searches",
            "responseModel" => "defaultJsonResponse"
        ),
        

        /**
         *    getCustomerSavedSearch() method
         *
         *    reference: http://docs.shopify.com/api/customersavedsearch
         */
        "getCustomerSavedSearch" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches/{id}.json",
            "summary" => "Get a single customer saved search",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Saved Search."
                )
            )
        ),

        
        /**
         *    getCustomerSavedSearchCustomers() method
         *
         *    reference: http://docs.shopify.com/api/customersavedsearch
         */
        "getCustomerSavedSearchCustomers" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches/{id}/customers.json",
            "summary" => "Get all customers who match the criteria for the specified customer saved search",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Saved Search."
                )
            )
        ),


        /**
         *    createCustomerSavedSearch() method
         *
         *    reference: http://docs.shopify.com/api/customersavedsearch
         */
        "createCustomerSavedSearch" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/customer_saved_searches.json",
            "summary" => "Create a new customer saved search.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "customer_saved_search" => array(
                    "location" => "postField",
                    "parameters" => array(
                        "name" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "query" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "body" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "accepts_marketing" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "country" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "last_order_date" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "orders_count" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "state" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "tag" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "total_spent" => array(
                            "type" => "string",
                            "location" => "postField",
                        )
                    )
                )
            )
        ),


        /**
         *    updateCustomerSavedSearch() method
         *
         *    reference: http://docs.shopify.com/api/customersavedsearch
         */
        "updateCustomerSavedSearch" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/customer_saved_searches/{id}.json",
            "summary" => "Update a customer saved search.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                ),
                "customer_saved_search" => array(
                    "location" => "postField",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "postField",
                        ),
                        "name" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "query" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "body" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "accepts_marketing" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "country" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "last_order_date" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "orders_count" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "state" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "tag" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "total_spent" => array(
                            "type" => "string",
                            "location" => "postField",
                        )
                    )
                )
            )
        ),


        /**
         *    deleteCustomerSavedSearch() method
         *
         *    reference: http://docs.shopify.com/api/customersavedsearch
         */
        "deleteCustomerSavedSearch" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/customer_saved_searches/{id}.json",
            "summary" => "Delete a customers saved search.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the CustomerSavedSearch."
                )
            )
        )
    ),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(

    ),
);