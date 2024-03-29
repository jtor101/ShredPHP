"use strict";

$(function() {
  // Gets teamId from query
  let urlParams = new URLSearchParams(location.search);
  let id = urlParams.get("teamid");
  // Hides Member Info, Edit Mode, and Cancel/Submit buttons
  $("#memberInfo").hide();
  $("#cancelBtn").hide();
  $("#submitBtn").hide();
  $("#editMode").hide();
  $(".errorMsg").hide();

  // Assigns link to register button
  $("#regBtn").attr("href", "registermember.php?teamid=" + id);

  // Edit button enables fields and shows Edit Mode and Cancel/Submit
  $("#editBtn").on("click", function() {
    $("#editBtn").hide();
    $("#cancelBtn").show();
    $("#submitBtn").show();
    $("#memberName").prop("readonly", false);
    $("#memberEmail").prop("readonly", false);
    $("#contactName").prop("readonly", false);
    $("#memberAge").prop("readonly", false);
    $("#memberGender").prop("disabled", false);
    $("#memberPhone").prop("readonly", false);
    $("#editMode").show();
  });
  // Cancel button disables fields and hides Edit Mode and Cancel/Submit
  $("#cancelBtn").on("click", function() {
    $("#editBtn").show();
    $("#cancelBtn").hide();
    $("#submitBtn").hide();
    $("#memberName").prop("readonly", true);
    $("#memberEmail").prop("readonly", true);
    $("#contactName").prop("readonly", true);
    $("#memberAge").prop("readonly", true);
    $("#memberGender").prop("disabled", true);
    $("#memberPhone").prop("readonly", true);
    $("#editMode").hide();
  });

  // Input Validation
  function inputVal() {
    $(".errorMsg").hide();
    $(".errorMsg").empty();

    if (
      $("#memberName")
        .val()
        .trim() == ""
    ) {
      $("#memberNameError").text("Member Name required");
      $("#memberNameError").show();
      return false;
    }

    if (
      $("#memberEmail")
        .val()
        .trim() == ""
    ) {
      $("#memberEmailError").text("Member Email required");
      $("#memberEmailError").show();
      return false;
    }

    if (
      $("#contactName")
        .val()
        .trim() == ""
    ) {
      $("#contactNameError").text("Contact Name required");
      $("#contactNameError").show();
      return false;
    }

    if (
      $("#memberAge")
        .val()
        .trim() == ""
    ) {
      $("#memberAgeError").text("Member Age required");
      $("#memberAgeError").show();
      return false;
    }
    if (
      $("#memberAge")
        .val()
        .trim() < 18
    ) {
      $("#memberAgeError").text("Member Age must be greater than 18");
      $("#memberAgeError").show();
      return false;
    }

    if (
      $("#memberPhone")
        .val()
        .trim() == ""
    ) {
      $("#memberPhoneError").text("Member Phone Number required");
      $("#memberPhoneError").show();
      return false;
    }
  }

  // Submit Button click handler
  $("#submitBtn").on("click", sendForm);

  function sendForm() {
    let isOk = inputVal();
    if (isOk == false) {
      return;
    } else {
      confirm("Are you sure you want to make these changes?");
      $.ajax({
        //if/else w validation, see editcourse
        url: "/http://localhost:8081/api/teams/" + id + "/members",
        method: "PUT",
        dataType: "json",
        data: $("#memberInfo").serialize()
      });
      alert("Updated member info!");
      location.reload();
    }
  }

  //return false;

  $.getJSON("/http://localhost:8081/api/teams/" + id, function(data) {
    let team = data;

    for (let i = 0; i < team.Members.length; i++) {
      let memInfo = $(
        "<tr><td>" +
          team.Members[i].MemberName +
          "</td><td>" +
          team.Members[i].Email +
          "</td><td>" +
          team.Members[i].ContactName +
          "</td><td>" +
          team.Members[i].Age +
          "</td><td>" +
          team.Members[i].Gender +
          "</td><td>" +
          team.Members[i].Phone +
          "</td><td><a class='btn btn-primary' id='id" +
          i +
          "' href='#memberInfo?memberid=" +
          team.Members[i].MemberId +
          "'>Details</a></td><td><button class='btn btn-danger' id='deleteid" +
          team.Members[i].MemberId +
          "'>Delete</button></td></tr>"
      );

      $("#teamTBody").append(memInfo);

      // Delete Button
      $("#deleteid" + team.Members[i].MemberId).on("click", function() {
        confirm("Are you sure you want to delete this member?");
        $.ajax({
          url: "/http://localhost:8081/api/teams/" + id + "/members/" + team.Members[i].MemberId,
          method: "DELETE",
          contentType: "application/json",
          success: function() {
            alert("Member deleted!");
            location.reload();
          }
        });
      });

      // Brings up Member Info table with member info populated in fields.
      $("#id" + i).on("click", function() {
        $("#memberInfo").show();
        $("#memberId").val(team.Members[i].MemberId);
        $("#memberName").val(team.Members[i].MemberName);
        $("#memberEmail").val(team.Members[i].Email);
        $("#contactName").val(team.Members[i].ContactName);
        $("#memberAge").val(team.Members[i].Age);
        $("#memberGender").val(team.Members[i].Gender);
        $("#memberPhone").val(team.Members[i].Phone);
      });
    }
  });
});
