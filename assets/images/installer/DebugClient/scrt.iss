; Script generated by the Inno Setup Script Wizard.
; SEE THE DOCUMENTATION FOR DETAILS ON CREATING INNO SETUP SCRIPT FILES!

#define MyAppName "GADClient"
#define MyAppVersion "1.5"
#define MyAppPublisher "My Company, Inc."
#define MyAppURL "http://www.example.com/"
#define MyAppExeName "BrgyForm.exe"

[Setup]
; NOTE: The value of AppId uniquely identifies this application.
; Do not use the same AppId value in installers for other applications.
; (To generate a new GUID, click Tools | Generate GUID inside the IDE.)
AppId={{499FFFAA-0999-4494-B606-6146432A52B8}
AppName={#MyAppName}
AppVersion={#MyAppVersion}
;AppVerName={#MyAppName} {#MyAppVersion}
AppPublisher={#MyAppPublisher}
AppPublisherURL={#MyAppURL}
AppSupportURL={#MyAppURL}
AppUpdatesURL={#MyAppURL}
DefaultDirName={pf}\{#MyAppName}
DisableProgramGroupPage=yes
OutputDir=C:\Users\pcuser\Desktop\GAD\installer
OutputBaseFilename=setup
Compression=lzma
SolidCompression=yes

[Languages]
Name: "english"; MessagesFile: "compiler:Default.isl"

[Tasks]
Name: "desktopicon"; Description: "{cm:CreateDesktopIcon}"; GroupDescription: "{cm:AdditionalIcons}"; Flags: unchecked

[Files]
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\BrgyForm.exe"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\BrgyForm.exe"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\BrgyForm.exe.config"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\BrgyForm.pdb"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\BrgyForm.vshost.exe"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\BrgyForm.vshost.exe.config"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\BrgyForm.vshost.exe.manifest"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.Core.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForm.BunifuShadowPanel.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForm.BunifuShadowPanel.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuButton.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuCircleProgress.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuCircleProgress.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuDataGridView.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuDataGridView.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuDropdown.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuDropdown.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuFormDock.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuFormDock.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuLabel.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuLabel.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuPictureBox.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuPictureBox.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuScrollBar.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuScrollBar.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuTextbox.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuToolTip.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu.UI.WinForms.BunifuToolTip.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Bunifu_UI_v1.5.3.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.CrystalReports.Engine.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.ClientDoc.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.CommLayer.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.CommonControls.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.CommonObjectModel.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.Controllers.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.CubeDefModel.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.DataDefModel.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.DataSetConversion.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.ObjectFactory.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.Prompting.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.ReportDefModel.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportAppServer.XmlSerialize.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.ReportSource.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.Shared.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\CrystalDecisions.Windows.Forms.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Devart.Data.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Devart.Data.MySql.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Devart.Data.MySql.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Devart.Data.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Charts.v20.1.Core.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.CodeParser.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Data.Desktop.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Data.Desktop.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Data.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Data.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.DataAccess.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.DataAccess.v20.1.UI.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.DataAccess.v20.1.UI.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.DataAccess.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Diagram.v20.1.Core.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Diagram.v20.1.Core.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Images.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Office.v20.1.Core.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Office.v20.1.Core.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Pdf.v20.1.Core.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Pdf.v20.1.Core.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Pdf.v20.1.Drawing.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Pdf.v20.1.Drawing.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.PivotGrid.v20.1.Core.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.PivotGrid.v20.1.Core.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Printing.v20.1.Core.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Printing.v20.1.Core.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.RichEdit.v20.1.Core.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.RichEdit.v20.1.Core.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.RichEdit.v20.1.Export.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Sparkline.v20.1.Core.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Sparkline.v20.1.Core.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Utils.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Utils.v20.1.UI.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Utils.v20.1.UI.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Utils.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Xpo.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.Xpo.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraBars.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraBars.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraCharts.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraCharts.v20.1.Extensions.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraCharts.v20.1.Wizard.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraCharts.v20.1.Wizard.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraCharts.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraDiagram.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraDiagram.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraEditors.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraEditors.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraGauges.v20.1.Core.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraGauges.v20.1.Core.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraGrid.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraGrid.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraLayout.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraLayout.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraNavBar.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraNavBar.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraPivotGrid.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraPivotGrid.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraPrinting.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraPrinting.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraReports.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraReports.v20.1.Extensions.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraReports.v20.1.Extensions.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraReports.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraRichEdit.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraRichEdit.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraTreeList.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraTreeList.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraVerticalGrid.v20.1.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\DevExpress.XtraVerticalGrid.v20.1.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\FlashControlV71.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\FontAwesome.Sharp.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\GADdatabase.txt"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\GADpass.txt"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\GADserver.txt"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\GADuser.txt"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\MaterialSkin.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\MySql.Data.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\root"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\ShockwaveFlashObjects.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\stdole.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Core.WinForms.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Core.WinForms.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Diagram.Base.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Diagram.Base.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Diagram.Windows.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Diagram.Windows.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Grid.Base.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Grid.Base.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Grid.Windows.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Grid.Windows.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Grid.Windows.XmlSerializers.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.SfInput.WinForms.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.SfInput.WinForms.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Shared.Base.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Shared.Base.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Shared.Windows.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Shared.Windows.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.SpellChecker.Base.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.SpellChecker.Base.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Tools.Base.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Tools.Base.xml"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Tools.Windows.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\pcuser\Desktop\GAD\installer\DebugClient\Syncfusion.Tools.Windows.xml"; DestDir: "{app}"; Flags: ignoreversion
; NOTE: Don't use "Flags: ignoreversion" on any shared system files

[Icons]
Name: "{commonprograms}\{#MyAppName}"; Filename: "{app}\{#MyAppExeName}"
Name: "{commondesktop}\{#MyAppName}"; Filename: "{app}\{#MyAppExeName}"; Tasks: desktopicon

[Run]
Filename: "{app}\{#MyAppExeName}"; Description: "{cm:LaunchProgram,{#StringChange(MyAppName, '&', '&&')}}"; Flags: nowait postinstall skipifsilent
