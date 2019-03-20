/*
 *   Membership page tab menu for mobile
 */

jQuery(function($) {
  $('.BasicMember ul:nth-child(2n)').addClass('active');
  $('.BasicMember h3:first-child').click(function() {
    $('.BasicMember ul:nth-child(2n)').addClass('active');
    $('.PartnerMember ul:nth-child(2n)').removeClass('active');
    $('.CommunityMember ul:nth-child(2n)').removeClass('active');
  });
  $('.PartnerMember h3:first-child').click(function() {
    $('.PartnerMember ul:nth-child(2n)').addClass('active');
    $('.BasicMember ul:nth-child(2n)').removeClass('active');
    $('.CommunityMember ul:nth-child(2n)').removeClass('active');
  });
  $('.CommunityMember h3:first-child').click(function() {
    $('.CommunityMember ul:nth-child(2n)').addClass('active');
    $('.PartnerMember ul:nth-child(2n)').removeClass('active');
    $('.BasicMember ul:nth-child(2n)').removeClass('active');
  });
});
