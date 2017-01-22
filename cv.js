 // Visa/dölj 1
 // $(document).ready(function(){
 //     $("#toggleEducation").click(function(){
 //         $("#education").toggle();
 //     });
 // });
 //
 // $(document).ready(function(){
 //     $("#toggleInternship").click(function(){
 //         $("#internship").toggle();
 //     });
 // });
 //
 // $(document).ready(function(){
 //     $("#toggleWorkExperience").click(function(){
 //         $("#workExperience").toggle();
 //     });
 // });

// visa/dölj omgjord
$('.toggleButton').click(function() {
    $(this).next().slideToggle(300);
});
