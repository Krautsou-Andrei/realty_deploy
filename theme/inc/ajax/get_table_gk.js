var initializeFormFilter;

jQuery(document).ready(function ($) {
  initializeFormFilter = function () {
    const SELECTORS = {
      CONTAINER_TABLE: "[data-container-table]",
      FILTER_SLIDER: "[data-filter-slider-area]",
      FORM_APARTAMENTS: "[data-form-table-apartamens]",
      FORM_APARTAMENTS_INPUT: "[data-form-table-apartaments-input]",
      FORM_INPUT: "[data-form-table-input]",
      FORM_LITER: "[data-form-table-liter]",
      INPUT_TABLE_PARAMS: "[data-input-table-params]",
      LOADER: "[data-loader]",
    };

    const inputTableParams = $(SELECTORS.INPUT_TABLE_PARAMS);
    const inputTableParamsValue = $(SELECTORS.INPUT_TABLE_PARAMS).val();

    function blockScroll() {
      $("body").css({
        overflow: "hidden",
        height: "100%",
      });
    }

    function unblockScroll() {
      $("body").css({
        overflow: "auto",
        height: "auto",
      });
    }

    $(SELECTORS.FORM_INPUT).change(function () {
      const formTableLiter = $(SELECTORS.FORM_LITER).serializeArray();
      const formApartamens =
        $(this).attr("name") == "gk-liter"
          ? []
          : $(SELECTORS.FORM_APARTAMENTS).serializeArray();

      const formArea = $(this).attr("name").includes("option-select-area")
        ? $(SELECTORS.FILTER_SLIDER).serializeArray()
        : [];

      const currentLiter = formTableLiter[0]?.value;
      const container_table = $(SELECTORS.CONTAINER_TABLE);
      const loader = $(SELECTORS.LOADER);

      loader.addClass("active");
      loader.show();
      blockScroll();

      $.ajax({
        url: ajax_object.ajaxurl,
        type: "POST",
        data: {
          action: "get_table_gk",
          params_table: inputTableParamsValue,
          current_liter: currentLiter,
          form_apartamens: formApartamens,
          form_area: formArea,
        },
        success: function (response) {
          if (response.pageGkTable) {
            container_table.html(response.pageGkTable);

            if (document.querySelector(SELECTORS.FILTER_SLIDER)) {
              const filterSlider = new GlobalFilterSlider(
                document.querySelector(SELECTORS.FILTER_SLIDER)
              );
              GlobalSetSliderByFilter();
            }
          }

          if (response.inputTableParams) {
            inputTableParams.val(response.inputTableParams);
          }
        },
        error: function (xhr, status, error) {
          console.error(error);
        },
        complete: function () {
          initializeFormFilter();
          loader.removeClass("active");
          loader.hide();
          unblockScroll();
          new NewTooltip();
        },
      });
    });
  };
});
